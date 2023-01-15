<footer id="footer">
    <div class="container">
        <div class="footer-content d-flex justify-content-center align-items-center flex-column">
            <strong class="site-logo footer-logo-img">
                <a href="{{ route('frontend.home') }}">
                    <img src="{{ asset('assets/frontend/img/Logo-Computerkopen.png') }}" alt="logo" class="img-fluid"/>
                </a>
            </strong>
            <div class="footer-nav">
                <ul class="navbar-nav flex-row flex-wrap justify-content-center">
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.PrivacyPolicy') }}">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.CookieSettings') }}">Cookie Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.ReturnPolicy') }}">Return Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.TermsConditions') }}">Terms & Conditions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.DeliveryPolicy') }}">Delivery Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.aboutme') }}">About me</a>
                    </li>
 
                </ul>
            </div>
            <div class="footer-icons">
                <ul class="list-unstyled d-flex">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Copyright © 2022 ComputerKopen, Inc. All Rights Reserved.</p>
        </div>
    </div>
</footer>
