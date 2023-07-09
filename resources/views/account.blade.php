@include('header')

    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
                  <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">{{ __('lang.myaccount') }}</li>
                                <li>
                                    <a href="https://dashboardpack.com/theme-details/architectui-dashboard-html-pro/" target="_blank">
                                        {{ __('lang.reservation') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="card">
                            <div class="card-body"> 
                            <h4 class="card-title">Szczegóły zamówienia</h4>
                            <table class="table table-bordered">  
                            <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>E-mail</th>
                            <th>Phone</th>
                            <th>Data</th>
                            <th>Hour</th>
                            <th>Passengers</th>
                            <th>Adult</th>
                            <th>Child</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Price</th>
                            </tr>
                            <tr>  
                            @foreach ($order as $order)
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->name }}</td> 
                            <td>{{ $order->surname }}</td> 
                            <td>{{ $order->email }}</td> 
                            <td>{{ $order->phone }}</td> 
                            <td>{{ $order->date }}</td>
                            <td>{{ $order->hour }}</td>
                            <td>{{ $order->passengers }}</td>
                            <td>{{ $order->adult }}</td>
                            <td>{{ $order->child }}</td>
                            <td>{{ $order->from }}</td>
                            <td>{{ $order->to }}</td>
                            <td>{{ $order->price }}</td> 
                            @endforeach
                            </tr>
                            </table>
                            </div>
                            </div>
                            </div>
                            </div>
                        </div>
                </div>
        </div>
    </div>
<script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script></body>
</html>
