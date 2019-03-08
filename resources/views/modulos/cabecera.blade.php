<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-9">
  <div class="mbr-navbar__section mbr-section">
    <div class="mbr-section__container container">
      <div class="mbr-navbar__container">
        <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
          <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
            
            <span class="mbr-brand__name"><a class="mbr-brand__name text-white">HORAS EXTRAS&nbsp;</a></span>
            
          </span>
        </div>
        <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
        <div class="mbr-navbar__column mbr-navbar__menu">
          <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
            <div class="mbr-navbar__column">
              <ul class="mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active mbr-buttons--only-links">
                @if (Auth::guest())
                
                @else



                  @can('ver_solicitudes')
                <div class="mbr-navbar__item btn-group">
                <li class="mbr-navbar__item">
                  <button type="buttons" class="mbr-buttons__btn btn btn-info" data-toggle="dropdown" style="color: white;"> Gestión de Solicitudes<span class="caret"></span></button>
                  <ul class="dropdown-menu" role="menu" id="menup">
                    <li ><a class="mbr-buttons__link btn text-white" >VER SOLICITUDES</a></li>
                      @can('crear_solicitud')
                    <li ><a class="mbr-buttons__link btn text-white" >INGRESAR SOLICITUDES</a></li>
                    @endcan
                  </ul>
                  </li>
                </div>
                @endcan


                <div class="mbr-navbar__item btn-group">
                <li class="mbr-navbar__item">
                  <button type="buttons" class="mbr-buttons__btn btn btn-info" data-toggle="dropdown" style="color: white;"> {{ Auth::user()->name }}<span class="caret"></span></button>
                  
                  <ul class="dropdown-menu" role="menu" id="menup">
                    
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                    </form>
                    <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">SALIR</a></li>
                  </ul>
                  </li>
                </div>


                @endif

              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
