<?php
if (
  session()->get('level') == 1
) {
  ?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="#" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs>
                    <img src="<?= base_url('images/logo_sph.PNG') ?>" alt="..." width="60px">
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>

            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <li class="menu-item">
              <a href="<?= base_url('Home/profile/' . session('id')) ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Profile</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?= base_url('Home/dashboard') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Table</span>
            </li>

            <li class="menu-item">
              <a href="<?= base_url('/home/minuman') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div>Minuman</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="<?= base_url('makanan') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div>Makanan</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?= base_url('keuangan') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div>Keuangan</div>
              </a>
            </li>
           <!--  <li class="menu-item">
              <a href="<?= base_url('pertandingan_nama') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div>Nama Pertandingan</div>
              </a>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Jadwal</span>
            </li>
            <li class="menu-item">
              <a href="<?= base_url('senin') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-time"></i>
                <div>Senin</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?= base_url('selasa') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-time"></i>
                <div>Selasa</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?= base_url('rabu') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-time"></i>
                <div>Rabu</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?= base_url('kamis') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-time"></i>
                <div>Kamis</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="<?= base_url('jumat') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-time"></i>
                <div>Jumat</div>
              </a>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pertandingan</span>
            </li>
            <li class="menu-item">
              <a href="<?= base_url('pertandingan') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-ball"></i>
                <div>Pertandingan</div>
              </a>
            </li> -->
            <li class="menu-item">
              <a href="<?= base_url('pertandingan/semua') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-ball"></i>
                <div>Laporan</div>
              </a>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Log Out</span>
            </li>
            <li class="menu-item">
              <a href="<?= base_url('Home/logout') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-power-off"></i>
                <div>Log Out</div>
              </a>
            </li>

          </ul>
        </aside>
        <?php
} else if (session()->get('level') == 2) {
  ?>

          <body>
            <!-- Layout wrapper -->
            <div class="layout-wrapper layout-content-navbar">
              <div class="layout-container">
                <!-- Menu -->

                <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                  <div class="app-brand demo">
                    <a href="#" class="app-brand-link">
                      <span class="app-brand-logo demo">
                        <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                          <defs>
                            <img src="<?= base_url('images/logo_sph.PNG') ?>" alt="..." width="60px">
                          </defs>
                          <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                              <g id="Icon" transform="translate(27.000000, 15.000000)">
                                <g id="Mask" transform="translate(0.000000, 8.000000)">
                                  <mask id="mask-2" fill="white">
                                    <use xlink:href="#path-1"></use>
                                  </mask>
                                  <use fill="#696cff" xlink:href="#path-1"></use>
                                  <g id="Path-3" mask="url(#mask-2)">
                                    <use fill="#696cff" xlink:href="#path-3"></use>
                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                  </g>
                                  <g id="Path-4" mask="url(#mask-2)">
                                    <use fill="#696cff" xlink:href="#path-4"></use>
                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                  </g>
                                </g>
                                <g id="Triangle"
                                  transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                  <use fill="#696cff" xlink:href="#path-5"></use>
                                  <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </span>

                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                      <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                  </div>

                  <div class="menu-inner-shadow"></div>

                  <ul class="menu-inner py-1">

                    <li class="menu-item">
                      <a href="<?= base_url('Home/dashboard') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                      </a>
                    </li>


                    <li class="menu-header small text-uppercase">
                      <span class="menu-header-text">Jadwal</span>
                    </li>
                    <li class="menu-item">
                      <a href="<?= base_url('senin') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-time"></i>
                        <div>Senin</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="<?= base_url('selasa') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-time"></i>
                        <div>Selasa</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="<?= base_url('rabu') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-time"></i>
                        <div>Rabu</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="<?= base_url('kamis') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-time"></i>
                        <div>Kamis</div>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="<?= base_url('jumat') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-time"></i>
                        <div>Jumat</div>
                      </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                      <span class="menu-header-text">Pertandingan</span>
                    </li>
                    <li class="menu-item">
                      <a href="<?= base_url('pertandingan') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-ball"></i>
                        <div>Pertandingan</div>
                      </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                      <span class="menu-header-text">Log Out</span>
                    </li>
                    <li class="menu-item">
                      <a href="<?= base_url('Home/logout') ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-power-off"></i>
                        <div>Log Out</div>
                      </a>
                    </li>

                  </ul>
                </aside>
              <?php
} else if (session()->get('level') == 3) {
  ?>

                  <body>
                    <!-- Layout wrapper -->
                    <div class="layout-wrapper layout-content-navbar">
                      <div class="layout-container">
                        <!-- Menu -->

                        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                          <div class="app-brand demo">
                            <a href="#" class="app-brand-link">
                              <span class="app-brand-logo demo">
                                <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                  xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <defs>
                                    <img src="<?= base_url('images/logo_sph.PNG') ?>" alt="..." width="60px">
                                  </defs>
                                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                                          <mask id="mask-2" fill="white">
                                            <use xlink:href="#path-1"></use>
                                          </mask>
                                          <use fill="#696cff" xlink:href="#path-1"></use>
                                          <g id="Path-3" mask="url(#mask-2)">
                                            <use fill="#696cff" xlink:href="#path-3"></use>
                                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                          </g>
                                          <g id="Path-4" mask="url(#mask-2)">
                                            <use fill="#696cff" xlink:href="#path-4"></use>
                                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                          </g>
                                        </g>
                                        <g id="Triangle"
                                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                          <use fill="#696cff" xlink:href="#path-5"></use>
                                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                        </g>
                                      </g>
                                    </g>
                                  </g>
                                </svg>
                              </span>

                            </a>

                            <a href="javascript:void(0);"
                              class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                              <i class="bx bx-chevron-left bx-sm align-middle"></i>
                            </a>
                          </div>

                          <div class="menu-inner-shadow"></div>

                          <ul class="menu-inner py-1">

                            <li class="menu-item">
                              <a href="<?= base_url('Home/dashboard') ?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                <div data-i18n="Analytics">Dashboard</div>
                              </a>
                            </li>

                            <li class="menu-header small text-uppercase">
                              <span class="menu-header-text">Data</span>
                            </li>

                            <li class="menu-item">
                              <a href="<?= base_url('siswa') ?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-user"></i>
                                <div>Siswa</div>
                              </a>
                            </li>

                            <li class="menu-item">
                              <a href="<?= base_url('kesiswaan') ?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-user"></i>
                                <div>Kesiswaan</div>
                              </a>
                            </li>
                            <li class="menu-header small text-uppercase">
                              <span class="menu-header-text">Jadwal</span>
                            </li>
                            <li class="menu-item">
                              <a href="<?= base_url('senin') ?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-time"></i>
                                <div>Senin</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="<?= base_url('selasa') ?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-time"></i>
                                <div>Selasa</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="<?= base_url('rabu') ?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-time"></i>
                                <div>Rabu</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="<?= base_url('kamis') ?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-time"></i>
                                <div>Kamis</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="<?= base_url('jumat') ?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-time"></i>
                                <div>Jumat</div>
                              </a>
                            </li>
                            <li class="menu-header small text-uppercase">
                              <span class="menu-header-text">Pertandingan</span>
                            </li>
                            <li class="menu-item">
                              <a href="<?= base_url('pertandingan') ?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-ball"></i>
                                <div>Pertandingan</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="<?= base_url('pertandingan/semua') ?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-ball"></i>
                                <div>Laporan</div>
                              </a>
                            </li>
                            <li class="menu-header small text-uppercase">
                              <span class="menu-header-text">Log Out</span>
                            </li>
                            <li class="menu-item">
                              <a href="<?= base_url('Home/logout') ?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-power-off"></i>
                                <div>Log Out</div>
                              </a>
                            </li>

                          </ul>
                        </aside>

                  <?php } ?>