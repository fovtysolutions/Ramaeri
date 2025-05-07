<?php
  $db = \Config\Database::connect();
  $session = session();
  $roomtypes = $db->table('hotel_booking_room_type')->where('admin_uid', $session->get('uid'))->get()->getResultArray();
  $rooms = $db->table('hotel_booking_rooms')->where('admin_uid', $session->get('uid'))->get()->getResultArray();
?>

            let checkOutPicker; 
            flatpickr("#checkInDate", {
                dateFormat: "d M Y",
                defaultDate: new Date(),
                allowInput: true,
                onChange: function (selectedDates, dateStr, instance) {
                instance.element.value = dateStr;

                if (selectedDates.length > 0) {
                    const checkInDate = selectedDates[0];
                    const isoDate = checkInDate.toISOString().split('T')[0];

                    const nextDay = new Date(checkInDate);
                    const nextdate = new Date(checkInDate);
                    nextdate.setDate(nextdate.getDate() + 1);

                    checkOutPicker.set('minDate', nextDay);
                    checkOutPicker.setDate(nextdate, true); 
                }
                }
            });

            checkOutPicker = flatpickr("#checkOutDate", {
                dateFormat: "d M Y",
                defaultDate: new Date(new Date().setDate(new Date().getDate() + 1)), 
                allowInput: true,
                onChange: function (selectedDates, dateStr, instance) {
                instance.element.value = dateStr;
                    if (selectedDates.length > 0) {
                        const isoDate = selectedDates[0].toISOString().split('T')[0];
                    }
                }
            });


        let roomtypes = <?php echo json_encode($roomtypes); ?>;
        let rooms = <?php echo json_encode($rooms); ?>;
        let roomarray = [];
        let daynight = 0;
        let discountsetvalue = 0;
        $(document).on('click', '#addarray', function () {
            addArray();
            $('#roomarray').val(JSON.stringify(roomarray));
            joinRomms(roomarray, '#addRooms');
        });

        $(document).on('input change', '#roomarray', function () {
            roomarray = JSON.parse($(this).val());
            joinRomms(roomarray, '#addRooms');
        });

        $(document).on('input change', '.room-type-select, .room-number-select, .room-adult-number, .room-children-number, .room-room-price, .room-discount-value', function () {
            let ids = Number($(this).closest('.room-details-row').find('.room-id').val());
            let setroomarray = roomarray.find(item => item.id == ids);
            if (setroomarray) {
                let row = $(this).closest('.room-details-row');
                setroomarray.type_id = row.find('.room-type-select').val();
                setroomarray.room_id = row.find('.room-number-select').val();
                setroomarray.adult = row.find('.room-adult-number').val();
                setroomarray.child = row.find('.room-children-number').val();
                setroomarray.room_price = row.find('.room-room-price').val();
                setroomarray.room_discount_type = row.find('.percentage-discount-value').val();
                if(setroomarray.book_id != 0){
                    setroomarray.book_id = setroomarray.book_id
                }
                $('#roomarray').val(JSON.stringify(roomarray));
            } else {
                console.log('No matching item found in room');
            }
        });

        $(document).on('click', '.deleteroom', function () {
            let totalRows = $('.room-details-row').length;
            if (totalRows > 1) {
                $(this).closest('.room-details-row').remove();
                calculatemainTotalRoomPrice();
                calculateTotalRoomPrice();
                const deleteId = $(this).data('delete-id');
                roomarray = roomarray.filter(item => item.id !== deleteId);
                $('#roomarray').val(JSON.stringify(roomarray));
            } else {
                toastr.error('At least one room must remain.');
            }
        });

        $(document).on('input change', '#checkInDate, #checkOutDate', function () {
            let checkInDate = new Date($('#checkInDate').val());
            let checkOutDate = new Date($('#checkOutDate').val());

            if (!isNaN(checkInDate) && !isNaN(checkOutDate)) {
                let timeDiff = checkOutDate.getTime() - checkInDate.getTime();
                daynight = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
                if (daynight > 0) {
                    $('#daynight').text(daynight + ' Nights');
                    $('#total_room_nights_text').text(daynight + ' no of nights staying');
                } else {
                    daynight = 1;
                    $('#daynight').text('Day use');
                    $('#total_room_nights_text').text('1 no of day staying');
                }
                if (roomarray.length == 0) {
                    addArray();
                    joinRomms(roomarray, '#addRooms');
                }
                dateChangeCalculation(daynight);
                calculatemainTotalRoomPrice();
                calculateTotalRoomPrice(); 
            } else {
                $('#daynight').text('0 Nights');
            }
        })

        $(document).on('input', '.roomType', function () {
            let ids = Number($(this).val());
            let $this = $(this);

            $.ajax({
                url: '<?php echo base_url('calendar/getroomtype'); ?>',
                type: 'POST',
                data: { id: ids },
                success: function(response) {
                    let roomnumber = response.map(item => 
                        `<option data-singleroom='${JSON.stringify(item)}' value="${item.id}">${item.name}</option>`
                    ).join('');
                    let $roomNumber = $this.closest('.room-details-row').find('.roomNumber');
                    $roomNumber.html(roomnumber);
                    $roomNumber.data('roomarray', JSON.stringify(response));
                    if (response.length > 0) {
                        $roomNumber.val(response[0].id).trigger('change');
                    }
                }
            });
        });

        $(document).on('input change', '.roomNumber', function () {
            let $this = $(this);
            let selectedRoomId = $this.val(); 
            let roomData = $this.data('roomarray');
            if (roomData) {
                let rooms = JSON.parse(roomData); 
                let selectedRoom = rooms.find(item => item.id == selectedRoomId);
                if (selectedRoom) {
                    $this.closest('.room-details-row').find('.adultnumber').attr('max', selectedRoom.adults ?? '');
                    $this.closest('.room-details-row').find('.childrennumber').attr('max', selectedRoom.children ?? '');
                    $this.closest('.room-details-row').find('.roompricing').val(selectedRoom.pricing*daynight ?? '');
                    $this.closest('.room-details-row').find('.mainroompricing').val(selectedRoom.pricing*daynight ?? '');
                    $this.closest('.room-details-row').find('.changepricing').val(selectedRoom.pricing ?? '');
                    $this.closest('.room-details-row').find('.vat-rate').val(selectedRoom.vat_rate ?? '');
                    calculatemainTotalRoomPrice();
                    calculateTotalRoomPrice();
                }
            }
        });

        function addArray() {
            const setArray = {
                id: Math.floor(Math.random() * 1000000),
                type_id: 0,
                room_id: 0,
                adult: 0,
                child: 0,
                room_price: 0,
                room_discount_type: 0,
                book_id: 0,
            }
            roomarray.push(setArray);
        }

        function dateChangeCalculation(daynight) {
            $('.room-details-row').each(function () {
                let total = 0;
                let $row = $(this);

                $row.find('.changepricing').each(function () {
                    let price = parseFloat($(this).val());
                    if (!isNaN(price)) {
                        total += price * daynight;
                    }
                });

                $row.find('.roompricing').val(total);
                $row.find('.mainroompricing').val(total);
            });
        }

        function calculateTotalRoomPrice() {
            let total = 0;

            $('.roompricing').each(function () {
                let price = parseFloat($(this).val());
                if (!isNaN(price)) {
                    total += price;
                }
            });

            $('#total_room_payments').text(total.toFixed(2));
            $('#total_room_payments_input').val(total.toFixed(2));
            calculatevatTotalRoomPrice();
            calculateTotalOutstanding();
        }

        function calculatemainTotalRoomPrice() {
            let total = 0;

            $('.mainroompricing').each(function () {
                let price = parseFloat($(this).val());
                if (!isNaN(price)) {
                    total += price;
                }
            });

            $('#total_room_payment').text(total.toFixed(2));
            $('#total_room_payment_input').val(total.toFixed(2));
        }

        function calculatevatTotalRoomPrice() {
            let total = 0;

            $('.vat-rate').each(function () {
                let price = parseFloat($(this).val());
                if (!isNaN(price)) {
                    total += price;
                }
            });

            $('#var_rate_total').text(total.toFixed(2));
            $('#total_percentage_taxes_input').val(total.toFixed(2));
        }

        function calculateTotalDiscount() {
            let maintotal = parseFloat($('#total_room_payment').text()) || 0;
            let total = parseFloat($('#total_room_payments').text()) || 0;
            let discount =  maintotal - total;
            $('#total_room_percentage').text(discount.toFixed(2));
            $('#total_room_percentage_input').val(discount.toFixed(2));
        }

        function calculateTotalOutstanding() {
            let total = parseFloat($('#total_room_payments').text()) || 0;
            let vat = parseFloat($('#var_rate_total').text()) || 0;
            let vatdiscount = vat + total; 
            $('#total_room_outstanding').text(vatdiscount.toFixed(2));
            $('#total_room_outstanding_input').val(vatdiscount.toFixed(2));
        }

        $(document).on('click', '.selectDiscount', function () {
            let discountType = $(this).data('discount-type');
            if (discountType == 'percentage') {
                $('.percentage-discount').text('%');
                $('.percentage-discount-value').val(discountType);
                $('.discount-value').val('');
            } else {
                $('.percentage-discount').text('£');
                $('.percentage-discount-value').val(discountType);
                $('.discount-value').val('');
            }
        });

        $(document).on('input', '.discount-value', function () {
            let $this = $(this);
            let discountValue = parseFloat($this.val()) || 0; 

            let $row = $this.closest('.room-details-row');
            let originalPrice = parseFloat($row.find('.roompricing').data('original-price')) || 0;

            if (!originalPrice) {
                originalPrice = parseFloat($row.find('.roompricing').val());
                $row.find('.roompricing').data('original-price', originalPrice); 
            }
            let percentOrFixed = $row.find('.percentage-discount-value').val();
            console.log(percentOrFixed);
            
            let newPrice;
            if (discountValue <= 0) {
                newPrice = originalPrice;
            } else {
                if (percentOrFixed == 'percentage') {
                    newPrice = originalPrice - (originalPrice * discountValue) / 100;
                } else {
                    newPrice = originalPrice - discountValue;
                    console.log(newPrice , originalPrice, discountValue);
                }
            }
            if (newPrice < 0) newPrice = 0; 
            $row.find('.roompricing').val(newPrice.toFixed(2));
            calculateTotalRoomPrice();
            calculateTotalDiscount();
            calculateTotalOutstanding();
        });

        function joinRomms(arrayhere, divID) {
            if (arrayhere.length > 0) {
                let updatedArray = arrayhere.map((details, index) => {
                let row = $(`.room-details-row`).eq(index);
                if (row.length) {
                        details.type_id = row.find('.room-type-select').val();
                        details.room_id = row.find('.roomNumber').val();
                        details.adult = row.find('.room-adult-number').val();
                        details.child = row.find('.room-children-number').val();
                        details.room_price = row.find('.room-room-price').val();
                        details.room_discount_type = row.find('.room-discount-value').val();
                    }
                    return details;
                });
                $('#roomarray').val(JSON.stringify(updatedArray));
                let result = updatedArray.map((details, index) => {
                    return `
                            <div class="room-details-row">
                                <input type="hidden" class="room-id" value="${details.id}">
                                <div class="room-details-cell roomstype">
                                    <label>Room type</label>
                                    <select id="roomType" class="form-select roomType room-type-select">
                                        <option value="">Select Room Type</option>
                                        ${roomtypes.map(roomtype => `<option ${details.type_id == roomtype.id ? 'selected' : ''} value="${roomtype.id}">${roomtype.room_type_name}</option>`).join('')}
                                    </select>
                                </div>
                                <input type="hidden" class="vat-rate" value="0">
                                <div class="room-details-cell selectroomparent">
                                    <label>Room #</label>
                                    <select id="roomNumber" class="form-select roomNumber editfor${details.id}roomNumber room-number-select">
                                        ${rooms.map(room => `<option ${details.room_id == room.id ? 'selected' : ''} value="${room.id}">${room.name}</option>`).join('')}
                                    </select>
                                </div>

                                <div class="room-details-cell small-cell">
                                    <label>Adults</label>
                                    <input type="number" class="adultnumber room-adult-number" value="${details.adult}" min="0" id="adults">
                                </div>

                                <div class="room-details-cell small-cell">
                                    <label>Children</label>
                                    <input type="number" class="childrennumber room-children-number" value="${details.child}" min="0" id="children">
                                </div>

                                <div class="room-details-cell price-cell">
                                    <label>Room Price</label>
                                    <div class="price-input">
                                        <span class="currency">£</span> 
                                        <input type="hidden" class="roompricing" value="${details.room_price}">
                                        <input type="number" class="mainroompricing room-room-price" value="${details.room_price}">
                                        <input type="hidden" class="changepricing" value="${details.room_price}">
                                    </div>
                                </div>

                                <div class="room-details-cell discount-cell">
                                    <label> Discount
                                        <span class="dropdown-toggle" data-toggle="dropdown"></span>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item selectDiscount" data-discount-type="percentage" href="#">
                                                Percentage
                                            </a>
                                            <a class="dropdown-item selectDiscount" data-discount-type="fixed" href="#">
                                                Fixed
                                            </a>
                                        </div>
                                    </label>
                                    <div class="input-group">
                                        <input type="number" class="form-control discount-value room-discount-value" placeholder="Discount" value="${details.room_discount_type}">
                                        <span class="input-group-text percentage-discount" id="basic-addon1">£</span>
                                        <input type="hidden" class="form-control percentage-discount-value" value="${details.room_discount_type}">
                                    </div>
                                </div>
                                <button type="button" class="delete-btn-room deleteroom" data-delete-id="${details.id}"><i class="fa fa-trash"></i></button>
                            </div>
                        `;
                });
                $(divID).html(result.join(''));
            }else{
                $(divID).html(`
                    <div class="room-details-row">
                        <div class="room-details-cell">
                            <p>Dates not selected</p>
                        </div>
                    </div>
                `);
            }
        }

        const $addReservationBtnres = $('#reserve-addreservation');
        const $popupOverlayres = $('#reserve-popupOverlayres');
        const $closePopupres = $('#reserve-closePopupres');
        const $addReservationFormres = $('#reserve-addReservationFormres');

        $addReservationBtnres.on('click', function() {+
            $popupOverlayres.css('display', 'flex');
            $('#checkInDate').val(' ');
            $('#checkOutDate').val(' ');
            $('#roomType').val(' ');
            $('#guest_first_name').val('');
            $('#guest_last_name').val('');
            $('#guest_email').val('');
            $('#guest_phone').val('');
            roomarray = [];
            
            $('#roomarray').val(JSON.stringify(roomarray));
            joinRomms(roomarray, '#addRooms');
            $('#edit').val('add').trigger('change');
            $('.displayit').addClass('display-none');
        });

        $closePopupres.on('click', function() {
            $popupOverlayres.css('display', 'none');
            $('#checkInDate').val(' ');
            $('#checkOutDate').val(' ');
            $('#roomType').val(' ');
            $('#guest_first_name').val('');
            $('#guest_last_name').val('');
            $('#guest_email').val('');
            $('#guest_phone').val('');
        });

        $popupOverlayres.on('click', function(e) {
            if (e.target === this) {
                $popupOverlayres.css('display', 'none');
            }
        });
