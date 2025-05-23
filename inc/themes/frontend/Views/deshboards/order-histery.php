<?php echo $this->section('frontcss'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/public/css/deshboard.css'); ?>">
<?php echo $this->endSection(); ?>
 <!--main content wrapper start-->
    <div class="main-wrapper" style="overflow: hidden">
      <section class="my-account pt-6 pb-120" >
        <div class="container">
          <div
            class="account-info d-flex align-items-center gap-6 p-4 p-sm-6 rounded mb-4 flex-wrap flex-lg-nowrap"
            style="background-color: #f8fff3"
          >
            <div class="profile-pic bg-shade rounded">
              <img
                src="https://ramaeri.com/public/frontend/default/assets/img/authors/avatar.png?v=v4.2.0"
                alt="avatar"
                class="img-fluid rounded-2"
              />
            </div>
            <div class="profile-inf-right">
              <h4 class="">example</h4>
              <div
                class="info-meta d-flex align-items-center gap-3 gap-md-4 fs-xs flex-wrap"
              >
                <span
                  ><i class="fa-solid fa-envelope me-2"></i
                  >example@example.com</span
                >
                <span><i class="fa-solid fa-phone me-2"></i>9981715909</span>
              </div>
              <div
                class="profile-achievements d-flex align-items-center flex-wrap mt-6"
              >
                <div class="achievement-box d-flex align-items-center gap-3">
                  <span
                    class="icon d-inline-flex align-items-center justify-content-center flex-shrink-0 bg-color-1 rounded-3"
                  >
                    <svg
                      width="26"
                      height="32"
                      viewBox="0 0 26 32"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M25.3573 26.3886L23.9282 8.38138C23.8392 7.22125 22.8581 6.31244 21.6946 6.31244H18.8719V6.18556C18.8719 2.77481 16.0971 0 12.6863 0C9.27556 0 6.50074 2.77481 6.50074 6.18556V6.31244H3.67812C2.51456 6.31244 1.53337 7.22119 1.44462 8.37894L0.0151202 26.3911C-0.0955048 27.8333 0.404808 29.2691 1.38768 30.3302C2.37056 31.3913 3.76387 32 5.21031 32H20.1622C21.6086 32 23.002 31.3914 23.9849 30.3302C24.9678 29.269 25.4681 27.8333 25.3573 26.3886ZM8.37512 6.18556C8.37512 3.80838 10.3092 1.87437 12.6863 1.87437C15.0634 1.87437 16.9975 3.80844 16.9975 6.18556V6.31244H8.37512V6.18556ZM22.6097 29.0566C21.9711 29.7459 21.102 30.1256 20.1622 30.1256H5.21037C4.27062 30.1256 3.40149 29.7459 2.76287 29.0566C2.12431 28.3671 1.81218 27.4714 1.88393 26.5369L3.31331 8.52469C3.32781 8.33519 3.48806 8.18681 3.67812 8.18681H6.50074V10.4952C6.50074 11.0128 6.92037 11.4324 7.43793 11.4324C7.95549 11.4324 8.37512 11.0128 8.37512 10.4952V8.18681H16.9975V10.4952C16.9975 11.0128 17.4171 11.4324 17.9347 11.4324C18.4522 11.4324 18.8719 11.0128 18.8719 10.4952V8.18681H21.6946C21.8846 8.18681 22.0448 8.33525 22.0596 8.52719L23.4886 26.5344C23.5605 27.4714 23.2483 28.3671 22.6097 29.0566Z"
                        fill="#21B169"
                      ></path>
                      <path
                        d="M16.9143 15.8929C16.5484 15.5269 15.955 15.5269 15.5891 15.8929L11.4043 20.0777L9.79519 18.4685C9.42925 18.1025 8.83581 18.1025 8.46981 18.4685C8.10381 18.8345 8.10381 19.4279 8.46981 19.7939L10.7416 22.0657C10.9246 22.2487 11.1645 22.3403 11.4043 22.3403C11.644 22.3403 11.8839 22.2488 12.0669 22.0657L16.9142 17.2183C17.2803 16.8523 17.2803 16.2589 16.9143 15.8929Z"
                        fill="#21B169"
                      ></path>
                    </svg>
                  </span>
                  <div>
                    <h4 class="mb-1">0</h4>
                    <span>Total Delivered</span>
                  </div>
                </div>

                <div class="achievement-box d-flex align-items-center gap-3">
                  <span
                    class="icon bg-color-2 d-inline-flex align-items-center justify-content-center flex-shrink-0 bg-color-2 rounded-3"
                  >
                    <svg
                      width="32"
                      height="32"
                      viewBox="0 0 32 32"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g clip-path="url(#clip0_1339_6368)">
                        <path
                          d="M6.56331 20.0779C4.353 20.0779 2.55469 21.8759 2.55469 24.0865C2.55469 26.2971 4.35306 28.0951 6.56331 28.0951C8.77356 28.0951 10.5719 26.2968 10.5719 24.0865C10.5719 21.8763 8.77356 20.0779 6.56331 20.0779ZM6.56331 26.0221C5.49619 26.0221 4.62813 25.154 4.62813 24.0869C4.62813 23.0198 5.49619 22.1513 6.56331 22.1513C7.63044 22.1513 8.4985 23.0198 8.4985 24.0869C8.4985 25.154 7.63044 26.0221 6.56331 26.0221Z"
                          fill="#10B2F5"
                        ></path>
                        <path
                          d="M24.4696 20.0779C22.2589 20.0779 20.4609 21.8759 20.4609 24.0865C20.4609 26.2971 22.2593 28.0951 24.4696 28.0951C26.6799 28.0951 28.4782 26.2968 28.4782 24.0865C28.4783 21.8763 26.6802 20.0779 24.4696 20.0779ZM24.4696 26.0221C23.4024 26.0221 22.5344 25.154 22.5344 24.0869C22.5344 23.0198 23.4024 22.1513 24.4696 22.1513C25.5367 22.1513 26.4051 23.0198 26.4051 24.0869C26.4051 25.154 25.5367 26.0221 24.4696 26.0221Z"
                          fill="#10B2F5"
                        ></path>
                        <path
                          d="M3.9395 9.05396C3.55144 9.05396 3.19581 9.27064 3.01787 9.61583L0.115062 15.2487C0.039375 15.3955 0 15.5583 0 15.7235V24.0864C0 24.659 0.464125 25.1231 1.03669 25.1231H3.55938V23.0496H2.07344V15.9751L4.57156 11.1274H12.4751V9.05396H3.9395V9.05396Z"
                          fill="#10B2F5"
                        ></path>
                        <path
                          d="M21.4592 23.0498H9.64062V25.1232H21.4592V23.0498Z"
                          fill="#10B2F5"
                        ></path>
                        <path
                          d="M30.9662 3.90503H12.4781C11.9055 3.90503 11.4414 4.36915 11.4414 4.94172V24.0864H13.5148V5.97847H29.9295V23.0497H27.4414V25.1232H30.9662C31.5388 25.1232 32.0029 24.659 32.0029 24.0865V4.94178C32.0029 4.36915 31.5388 3.90503 30.9662 3.90503Z"
                          fill="#10B2F5"
                        ></path>
                        <path
                          d="M12.4736 14.7212H1.03516V16.7946H12.4736V14.7212Z"
                          fill="#10B2F5"
                        ></path>
                        <path
                          d="M26.7949 10.2314C26.4144 9.80292 25.7589 9.76455 25.3314 10.145L20.192 14.71L18.1532 12.6449C17.7509 12.2375 17.0943 12.2334 16.6872 12.6356C16.2798 13.0379 16.2757 13.6944 16.6779 14.1019L19.4076 16.8664C19.6098 17.0714 19.8776 17.175 20.1457 17.175C20.3911 17.175 20.6368 17.0883 20.8334 16.9134L26.7082 11.6949C27.1363 11.3148 27.175 10.6595 26.7949 10.2314Z"
                          fill="#10B2F5"
                        ></path>
                      </g>
                      <defs>
                        <clipPath id="clip0_1339_6368">
                          <rect width="32" height="32" fill="white"></rect>
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                  <div>
                    <h4 class="mb-1">0</h4>
                    <span>Total Shipped</span>
                  </div>
                </div>

                <div class="achievement-box d-flex align-items-center gap-3">
                  <span
                    class="icon bg-color-3 d-inline-flex align-items-center justify-content-center flex-shrink-0 bg-color-3 rounded-3"
                  >
                    <svg
                      width="32"
                      height="32"
                      viewBox="0 0 32 32"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M0.145579 15.9438H1.18512C1.34222 15.9438 1.49288 16.003 1.60396 16.1084C1.71505 16.2139 1.77745 16.3568 1.77745 16.5059C1.77511 18.9392 2.44015 21.3311 3.70719 23.4466C4.97422 25.562 6.79962 27.3282 9.0039 28.5713C9.1869 27.8714 9.59618 27.2434 10.1744 26.7754L10.2857 26.6838C8.41262 25.6462 6.85962 24.16 5.78223 22.3737C4.70485 20.5875 4.14087 18.564 4.14678 16.5059C4.14678 16.3568 4.20919 16.2139 4.32027 16.1084C4.43135 16.003 4.58202 15.9438 4.73911 15.9438H5.77866C5.8065 15.945 5.83406 15.9381 5.85759 15.9239C5.88112 15.9097 5.89947 15.889 5.91015 15.8646C5.92234 15.8419 5.92677 15.8162 5.92284 15.791C5.91892 15.7658 5.90682 15.7424 5.88824 15.724L3.07229 12.6185C3.05856 12.6036 3.04166 12.5918 3.02271 12.5836C3.00376 12.5755 2.98321 12.5713 2.96241 12.5713C2.94162 12.5713 2.92106 12.5755 2.90212 12.5836C2.88317 12.5918 2.86627 12.6036 2.85254 12.6185L0.0359972 15.724C0.0174144 15.7424 0.00531912 15.7658 0.00139153 15.791C-0.00253605 15.8162 0.00189912 15.8419 0.014081 15.8646C0.0247628 15.889 0.0431166 15.9097 0.0666451 15.9239C0.0901737 15.9381 0.117735 15.945 0.145579 15.9438V15.9438Z"
                        fill="#FBA700"
                      ></path>
                      <path
                        d="M5.2262 10.1731L5.31782 10.2857C6.35413 8.41201 7.83965 6.85859 9.62532 5.78133C11.411 4.70408 13.434 4.14087 15.4913 4.14823C15.6404 4.14823 15.7834 4.21066 15.8888 4.3218C15.9942 4.43293 16.0534 4.58366 16.0534 4.74082V5.78082C16.0522 5.80868 16.0592 5.83625 16.0734 5.85979C16.0876 5.88333 16.1083 5.90169 16.1327 5.91238C16.1554 5.92448 16.1811 5.92887 16.2063 5.92494C16.2314 5.92101 16.2548 5.90897 16.2732 5.89045L19.3783 3.07327C19.3932 3.05953 19.4052 3.04259 19.4133 3.02358C19.4215 3.00456 19.4258 2.98393 19.4258 2.96305C19.4258 2.94217 19.4215 2.92153 19.4133 2.90252C19.4052 2.88351 19.3932 2.86656 19.3783 2.85282L16.2732 0.0356401C16.2547 0.0172779 16.2314 0.00533168 16.2062 0.00141127C16.1811 -0.00250914 16.1554 0.00178477 16.1327 0.0137142C16.1083 0.0244008 16.0876 0.0427626 16.0734 0.0663015C16.0592 0.0898404 16.0522 0.117413 16.0534 0.14527V1.18527C16.0534 1.34243 15.9942 1.49316 15.8888 1.6043C15.7834 1.71543 15.6404 1.77786 15.4913 1.77786C13.058 1.77534 10.6659 2.4406 8.55042 3.70821C6.43491 4.97582 4.66879 6.80212 3.42578 9.00749C4.12554 9.19125 4.754 9.59933 5.22451 10.1755L5.2262 10.1731Z"
                        fill="#FBA700"
                      ></path>
                      <path
                        d="M15.8665 26.0884C15.8488 26.0798 15.8297 26.0752 15.8103 26.0747C15.7795 26.0755 15.7501 26.0882 15.7277 26.1103L12.6214 28.9272C12.6066 28.9409 12.5947 28.9579 12.5866 28.9769C12.5784 28.9959 12.5742 29.0165 12.5742 29.0374C12.5742 29.0582 12.5784 29.0788 12.5866 29.0978C12.5947 29.1168 12.6066 29.1338 12.6214 29.1476L15.7271 31.9644C15.7456 31.9828 15.769 31.9947 15.7941 31.9987C15.8192 32.0026 15.8449 31.9983 15.8676 31.9864C15.8918 31.9755 15.9123 31.957 15.9263 31.9335C15.9403 31.91 15.9471 31.8825 15.9458 31.8548V30.8149C15.9458 30.6578 16.005 30.5071 16.1104 30.396C16.2158 30.2848 16.3588 30.2224 16.5079 30.2224C18.9413 30.2249 21.3335 29.5596 23.4491 28.2922C25.5647 27.0247 27.331 25.1987 28.5742 22.9936C27.8745 22.8068 27.2464 22.3971 26.7754 21.8204V21.8204L26.6883 21.7144C25.6502 23.5879 24.1634 25.141 22.3767 26.2182C20.59 27.2954 18.5662 27.8589 16.5079 27.8523C16.3588 27.8523 16.2158 27.7899 16.1104 27.6788C16.005 27.5676 15.9458 27.4169 15.9458 27.2598V26.2199C15.947 26.1921 15.94 26.1645 15.9258 26.1409C15.9116 26.1174 15.8909 26.0991 15.8665 26.0884V26.0884Z"
                        fill="#FBA700"
                      ></path>
                      <path
                        d="M27.8531 16.3468C27.8531 16.5064 27.7906 16.6594 27.6795 16.7723C27.5684 16.8852 27.4177 16.9486 27.2606 16.9486H26.2209C26.193 16.9473 26.1655 16.9547 26.142 16.9699C26.1184 16.9851 26.1001 17.0073 26.0894 17.0334C26.0772 17.0577 26.0728 17.0852 26.0767 17.1122C26.0806 17.1392 26.0927 17.1642 26.1113 17.1839L28.9277 20.5082C28.9391 20.5275 28.9552 20.5435 28.9744 20.5546C28.9937 20.5657 29.0155 20.5716 29.0376 20.5716C29.0598 20.5716 29.0816 20.5657 29.1008 20.5546C29.1201 20.5435 29.1362 20.5275 29.1475 20.5082L31.9645 17.1833C31.9831 17.1636 31.9952 17.1386 31.9992 17.1116C32.0031 17.0846 31.9987 17.0571 31.9865 17.0328C31.9757 17.0068 31.9573 16.9847 31.9338 16.9697C31.9102 16.9546 31.8827 16.9472 31.8549 16.9486H30.8152C30.6581 16.9486 30.5074 16.8852 30.3963 16.7723C30.2852 16.6594 30.2228 16.5064 30.2228 16.3468C30.2254 13.7415 29.5603 11.1805 28.293 8.91549C27.0258 6.6505 25.1999 4.75959 22.9951 3.42871C22.8085 4.17796 22.3989 4.85047 21.8221 5.35444L21.7148 5.44832C23.5882 6.5595 25.1413 8.15114 26.2185 10.0638C27.2958 11.9765 27.8595 14.1432 27.8531 16.3468V16.3468Z"
                        fill="#FBA700"
                      ></path>
                    </svg>
                  </span>
                  <div>
                    <h4 class="mb-1">0</h4>
                    <span>Order Processing</span>
                  </div>
                </div>

                <div class="achievement-box d-flex align-items-center gap-3">
                  <span
                    class="icon bg-color-4 d-inline-flex align-items-center justify-content-center flex-shrink-0 bg-color-4 rounded-3"
                  >
                    <svg
                      width="32"
                      height="32"
                      viewBox="0 0 32 32"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M29.3988 26.2549H8.4524C8.19484 26.2549 8.08449 25.9166 8.28619 25.7611L11.202 23.5201H27.8625C29.047 23.5201 30.0295 22.5464 30.0524 21.3637L30.2391 11.7551C30.2605 10.6597 29.4583 9.70857 28.3734 9.54639C27.8514 9.46831 27.3626 9.8272 27.2844 10.3499C27.2062 10.8726 27.5669 11.359 28.09 11.4372C28.226 11.4575 28.3265 11.5757 28.3239 11.7125L28.1371 21.3265C28.1343 21.4743 28.0111 21.6057 27.8626 21.6057H11.6372L8.61464 8.53751L10.1488 8.76115C10.6718 8.83909 11.1595 8.47611 11.2378 7.95341C11.316 7.43071 10.9553 6.9422 10.4321 6.86398L8.1342 6.51987L7.25576 3.10519C7.14712 2.68191 6.76533 2.39331 6.32796 2.39331H2.59851C2.06952 2.39331 1.64062 2.822 1.64062 3.35051C1.64062 3.87902 2.06945 4.30771 2.59851 4.30771H5.58477L9.80376 22.1608L7.11615 24.2313C5.49472 25.4806 6.40666 28.1693 8.45233 28.1693H10.9669C10.8556 28.4428 10.7945 28.7915 10.7945 29.1338C10.7945 30.7172 12.0918 32 13.6865 32C15.2812 32 16.5785 30.7199 16.5785 29.1365C16.5785 28.7942 16.5174 28.4428 16.4061 28.1693H21.6375C21.5262 28.4428 21.4651 28.7915 21.4651 29.1338C21.4651 30.7172 22.7625 32 24.3572 32C25.9519 32 27.2493 30.7199 27.2493 29.1365C27.2493 28.7942 27.1881 28.4428 27.0768 28.1693H29.3989C29.928 28.1693 30.3568 27.7406 30.3568 27.2121C30.3568 26.6836 29.9279 26.2549 29.3988 26.2549V26.2549ZM13.6865 30.0806C13.1481 30.0806 12.7102 29.6511 12.7102 29.1232C12.7102 28.5952 13.1482 28.1657 13.6865 28.1657C14.2249 28.1657 14.6628 28.5952 14.6628 29.1232C14.6628 29.6511 14.2249 30.0806 13.6865 30.0806ZM24.3571 30.0806C23.8187 30.0806 23.3808 29.6511 23.3808 29.1232C23.3808 28.5952 23.8188 28.1657 24.3571 28.1657C24.8955 28.1657 25.3334 28.5952 25.3334 29.1232C25.3334 29.6511 24.8954 30.0806 24.3571 30.0806Z"
                        fill="#A158FF"
                      ></path>
                      <path
                        d="M19.1561 13.8741C15.3201 13.8741 12.1992 10.7621 12.1992 6.93703C12.1992 3.11192 15.3201 0 19.1561 0C22.9922 0 26.1131 3.11192 26.1131 6.93703C26.1131 10.7621 22.9922 13.8741 19.1561 13.8741ZM19.1561 1.91399C16.3764 1.91399 14.115 4.1673 14.115 6.93703C14.115 9.70675 16.3765 11.9601 19.1561 11.9601C21.9358 11.9601 24.1973 9.70675 24.1973 6.93703C24.1973 4.1673 21.9359 1.91399 19.1561 1.91399V1.91399Z"
                        fill="#A158FF"
                      ></path>
                      <path
                        d="M17.459 9.3735L15.9204 7.54764C15.5798 7.14336 15.6316 6.53964 16.0363 6.19922C16.4409 5.8588 17.0451 5.91056 17.3859 6.31498L18.2313 7.31819L20.8614 4.52358C21.2238 4.13858 21.8301 4.11991 22.2154 4.48194C22.6009 4.84397 22.6195 5.44967 22.2571 5.83467L18.8896 9.41275C18.5888 9.72937 17.8191 9.79207 17.459 9.3735V9.3735Z"
                        fill="#A158FF"
                      ></path>
                    </svg>
                  </span>
                  <div>
                    <h4 class="mb-1">0</h4>
                    <span>New Orders</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-xl-3">
              <div
                class="account-nav rounded py-5"
                style="background-color: #f8fff3"
              >
                <h6 class="mb-4 px-4">Orders Tracking</h6>
                <ul
                  class="nav nav-tabs border-0 d-block account-nav-menu"
                  role="tablist"
                >
                  <li id="order-history" class="nav-link">
                    <a href="#" class="active">
                      <span class="me-2">
                        <svg
                          width="18"
                          height="18"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M5 12C5 12.5523 4.55228 13 4 13C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11C4.55228 11 5 11.4477 5 12Z"
                            fill="#212B36"
                          ></path>
                          <path
                            d="M7 11.94C7 11.4209 7.42085 11 7.94 11H20.06C20.5791 11 21 11.4209 21 11.94V12.06C21 12.5791 20.5791 13 20.06 13H7.94C7.42085 13 7 12.5791 7 12.06V11.94Z"
                            fill="#212B36"
                          ></path>
                          <path
                            d="M3 16.94C3 16.4209 3.42085 16 3.94 16H20.06C20.5791 16 21 16.4209 21 16.94V17.06C21 17.5791 20.5791 18 20.06 18H3.94C3.42085 18 3 17.5791 3 17.06V16.94Z"
                            fill="#212B36"
                          ></path>
                          <path
                            d="M3 6.94C3 6.42085 3.42085 6 3.94 6H20.06C20.5791 6 21 6.42085 21 6.94V7.06C21 7.57915 20.5791 8 20.06 8H3.94C3.42085 8 3 7.57915 3 7.06V6.94Z"
                            fill="#212B36"
                          ></path>
                        </svg>
                      </span>
                      Order History
                    </a>
                  </li>

                  <li id="track-order" class="nav-link">
                    <a href="#" class="">
                      <span class="me-2">
                        <svg
                          width="16"
                          height="20"
                          viewBox="0 0 16 20"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M7.64077 4.84662C5.83139 4.84662 4.35938 6.31863 4.35938 8.12801C4.35938 9.93738 5.83139 11.4094 7.64077 11.4094C9.45014 11.4094 10.9222 9.93738 10.9222 8.12801C10.9222 6.31863 9.45014 4.84662 7.64077 4.84662ZM7.64077 9.53431C6.86531 9.53431 6.23447 8.90342 6.23447 8.12801C6.23447 7.35256 6.86536 6.72171 7.64077 6.72171C8.41622 6.72171 9.04706 7.3526 9.04706 8.12801C9.04711 8.90342 8.41622 9.53431 7.64077 9.53431Z"
                            fill="#212B36"
                          />
                          <path
                            d="M7.64095 0.490906C3.42769 0.490906 0 3.91691 0 8.12802V8.33319C0 10.4566 1.2053 12.9162 3.58242 15.6439C5.29261 17.6062 6.98091 18.9762 7.05197 19.0335L7.64091 19.5091L8.22989 19.0335C8.30095 18.9762 9.98934 17.6062 11.6994 15.6439C14.0766 12.9162 15.2819 10.4566 15.2819 8.33319V8.12802C15.2819 3.91686 11.8542 0.490906 7.64095 0.490906ZM13.4068 8.12802V8.33319C13.4068 9.96191 12.3339 12.0567 10.3041 14.391C9.28875 15.5587 8.26158 16.519 7.64072 17.0696C7.02459 16.5234 6.00816 15.5733 4.99608 14.4119C2.9543 12.0692 1.87509 9.96711 1.87509 8.33319V8.12802C1.87509 4.95083 4.46166 2.366 7.64095 2.366C10.8203 2.366 13.4068 4.95083 13.4068 8.12802Z"
                            fill="#212B36"
                          />
                        </svg>
                      </span>
                      Track Order
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!--history table-->
            <div class="col-xl-9 tab-pane" id="history-order">
              <div
                class="recent-orders rounded py-5"
                style="background-color: #f8fff3"
              >
                <h6 class="mb-4 px-4">Your Orders</h6>
                <div class="table-responsive tracking-table">
                  <table class="order-history-table table">
                    <tbody>
                      <tr>
                        <th>Order Code</th>
                        <th>Placed On</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                      </tr>

                      <tr>
                        <td>#G-Store:160</td>
                        <td>16 May, 2025</td>
                        <td>1</td>
                        <td
                          class="text-secondary"
                          style="color: #658036 !important"
                        >
                          ₹1,300.00
                        </td>
                        <td>
                          <span
                            class="badge bg-secondary"
                            style="background-color: #658036 !important"
                          >
                            Cancelled
                          </span>
                        </td>
                        <td class="text-center">
                          <a
                            href="./orderHistory.html"
                            class="view-invoice fs-xs me-2"
                            target="_blank"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-title="Track My Order"
                            ><i class="fas fa-truck text-dark"></i
                          ></a>

                          <a
                            href="./orderHistory.html"
                            class="view-invoice fs-xs me-2"
                            target="_blank"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-title="View Details"
                            ><i class="fas fa-eye"></i
                          ></a>
                          <a
                            href="#"
                            id="update_delivery_status"
                            data-id="160"
                            class="view-invoice fs-xs"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-status="cancelled"
                            data-bs-title="Cancel Order"
                          >
                            <img
                              src="https://ramaeri.com/storage/app/public/images/trash1.png"
                              class="img-fluid"
                              style="width: 16.77px; height: 21.33px"
                            />
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="px-1 px-md-3"></div>
              </div>
            </div>
            <!--order status-->
            <div class="col-xl-9 tab-pane" id="order-tracking">
              <div
                class="order-tracking-wrap rounded py-5 px-4"
                style="background-color: #f8fff3"
              >
                <h6 class="mb-4">Order Tracking</h6>
                <form
                  class="search-form d-flex align-items-center mb-5 justify-content-center"
                  action="./orderHistory.html"
                >
                  <div class="input-group mb-3 d-flex justify-content-center">
                    <div class="input-group-prepend">
                      <span class="input-group-text rounded-0 rounded-start"
                        >#G-Store:</span
                      >
                    </div>
                    <input
                      type="text"
                      class="w-50"
                      placeholder="Code"
                      name="code"
                      value="160"
                    />

                    <button type="submit" class="btn btn-secondary px-3">
                      <i class="fa-solid fa-magnifying-glass text-white"></i>
                    </button>
                  </div>
                </form>

                <ol id="progress-bar" class="">
                  <li class="fs-xs tt-step">Order Placed</li>
                  <li class="fs-xs tt-step">Pending</li>
                  <li class="fs-xs tt-step">Processing</li>
                  <li class="fs-xs tt-step">Delivered</li>
                </ol>
                <div class="table-responsive-md mt-5">
                  <table class="table table-bordered fs-xs">
                    <thead>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Status Info</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>16 May, 2025</td>
                        <td>Order has been placed</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- modals -->
      <div class="modal fade" id="quickview_modal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content min-h-400">
            <div class="modal-body h-100 bg-white">
              <button
                type="button"
                class="btn-close float-end"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>

              <div
                class="data-preloader-wrapper d-flex align-items-center justify-content-center min-h-400"
              >
                <div class="" role="status">
                  <span class="sr-only"></span>
                </div>
              </div>

              <div class="product-info"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- modals -->
    </div>
<?php echo $this->section('script'); ?>
<script>
      document.addEventListener("DOMContentLoaded", function () {
        const navLinks = document.querySelectorAll(".nav-link");
        const tabPanes = document.querySelectorAll(".tab-pane");

        navLinks.forEach((link) => {
          link.addEventListener("click", function () {
            // Remove 'active' from all nav links and tab panes
            navLinks.forEach((nav) => nav.classList.remove("active"));

            // Add 'active' to clicked nav and corresponding tab
            this.classList.add("active");
            const id = this.id;

            if (id === "order-history") {
              console.log("order-history");
              document.getElementById("history-order").classList.add("active");
               document.getElementById('history-order').style.display = 'block';
              document.getElementById("order-tracking").style.display = "none";
            } else if (id === "track-order") {
              console.log("track-order");
              document.getElementById("order-tracking").classList.add("active");
              document.getElementById("order-tracking").style.display = "block";
              document.getElementById("history-order").style.display = "none";
            }
          });
        });
      });
    </script>
<?php echo $this->endSection(); ?>