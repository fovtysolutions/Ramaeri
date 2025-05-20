<?php // echo view('common_script/countryStateCity', ['stateid'=>'stateid','cityid'=>'cityid', 'selectedstate'=> 'selectedstate', 'selectedcity' => 'selectedcity']); ?>
<script>
    $(document).ready(function () {
        const selectedState = "<?= isset($selectedstate) ? $selectedstate : '' ?>";
        const selectedCity = "<?= isset($selectedcity) ? $selectedcity : '' ?>";

        $.getJSON('<?= base_url('assets/country_state_citys.json') ?>', function (data) {
            const states = data[0].states;

            states.forEach(state => {
                const isSelected = state.name === selectedState ? 'selected' : '';
                $('#<?= $stateid ?>').append(
                    `<option ${isSelected} value="${state.name}">${state.name}</option>`
                );
            });

            if (selectedState) {
                const stateData = states.find(state => state.name === selectedState);
                if (stateData && stateData.cities.length > 0) {
                    $('#<?= $cityid ?>').empty().append('<option value="">Select City</option>');
                    stateData.cities.forEach(city => {
                        const isSelectedCity = city.name === selectedCity ? 'selected' : '';
                        $('#<?= $cityid ?>').append(
                            `<option ${isSelectedCity} value="${city.name}">${city.name}</option>`
                        );
                    });
                    $('#<?= $cityid ?>').prop('disabled', false);
                } else {
                    $('#<?= $cityid ?>').empty().append('<option value="">Select City</option>').prop('disabled', true);
                }
            }

            $('#<?= $stateid ?>').on('change', function () {
                const selectedState = $(this).val();
                const stateData = states.find(state => state.name === selectedState);

                if (stateData && stateData.cities.length > 0) {
                    $('#<?= $cityid ?>').empty().append('<option value="">Select City</option>');
                    stateData.cities.forEach(city => {
                        $('#<?= $cityid ?>').append(
                            `<option value="${city.name}">${city.name}</option>`
                        );
                    });
                    $('#<?= $cityid ?>').prop('disabled', false);
                } else {
                    $('#<?= $cityid ?>').empty().append('<option value="">Select City</option>').prop('disabled', true);
                }
            });
        });
    });
</script>