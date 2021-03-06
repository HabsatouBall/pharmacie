<div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt">

                    </i>
                   <h3 style="margin-left: 18px; margin-top: -20px;">Acceuil</h3>
                </a>
            </li>
            <li class="nav-item nav-dropdown" style="width:1238px !important">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fas fa-users nav-icon">

                    </i>
                    <!-- {{ trans('global.userManagement.title') }} -->
                    Gestion Utilisateurs
                </a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            {{ trans('global.permission.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <i class="fas fa-briefcase nav-icon">

                            </i>
                            {{ trans('global.role.title') }}
                        </a>
                    </li>

                    <li class="nav-item nav-dropdown">
                      <a class="nav-link  nav-dropdown-toggle">
                          <i class="fas fa-users nav-icon">

                          </i>
                                    Utilisateurs
                      </a>
                        <ul class="nav-dropdown-items">

                              <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fas fa-user nav-icon">

                                      </i>
                                                      <!-- {{ trans('global.user.title') }} -->
                                      Employées
                                    </a>
                                </li>
                                <li class="nav-item">
                                  <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                      <i class="fas fa-user nav-icon">

                                        </i>
                                                        <!-- {{ trans('global.user.title') }} -->
                                      Fournisseurs
                                      </a>
                                  </li>
                                <li class="nav-item">
                                  <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                      <i class="fas fa-user nav-icon">

                                        </i>
                                                        <!-- {{ trans('global.user.title') }} -->
                                      Clients
                                      </a>
                                  </li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fas fa-cogs nav-icon">
                    </i>
                    Gestion Medicaments
                </a>
                <ul class="nav-dropdown-items">
                  <li class="nav-item">
                      <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                          <i class="fa fa-medkit">

                          </i>
                          {{ trans('global.product.title') }}
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route("admin.commandes.index") }}" class="nav-link {{ request()->is('admin/commandes') || request()->is('admin/commandes/*') ? 'active' : '' }}">
                          <i class="fa fa-plus-square">

                          </i>
                          <!-- {{ trans('global.product.title') }} -->
                          Commandes
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route("admin.ventes.index") }}" class="nav-link {{ request()->is('admin/ventes') || request()->is('admin/ventes/*') ? 'active' : '' }}">
                          <i class="fa fa-ambulance">

                          </i>
                          <!-- {{ trans('global.product.title') }} -->
                          Ventes
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                          <i class="fa fa-file-code-o">

                          </i>
                          <!-- {{ trans('global.product.title') }} -->
                          Categories
                      </a>
                  </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 869px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 415px;"></div>
        </div>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
