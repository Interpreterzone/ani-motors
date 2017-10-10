<div class="main-navigation navbar-fixed-top">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL::to('/') }}">Ani Motors</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
                    <li><a href="#service">Service</a></li>
                    <li><a href="#about">Our Team</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a class="btn btn-success" href="{{ __('credential.register') }}">Singup</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>