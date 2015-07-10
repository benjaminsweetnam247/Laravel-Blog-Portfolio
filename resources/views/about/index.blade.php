@extends('layouts.full_page')

@section('pagetitle', 'About Me')

@section('content')
    <div class="row text-center">
        <div class="page-header">
            <h1>About Me</h1>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-lg-12">
            <h2>Your Name</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <img src="{{asset('images/credit_cards.png')}}" alt=""/>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 text-center text-capitalize">
            <h3>schooling</h3>
            <p></p>
        </div>
        <div class="col-lg-6 text-center text-capitalize">
            <h3>employment history</h3>
            <p></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 text-center text-capitalize">
            <h3>Hobbies</h3>
            <p></p>
        </div>
        <div class="col-lg-6 text-center text-capitalize">
            <h3>Clubs</h3>
            <p></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="timeline">
                <dl>
                    <dt>Apr 2014</dt>
                    <dd class="pos-right clearfix">
                        <div class="circ"></div>
                        <div class="time">Apr 14</div>
                        <div class="events">
                            <div class="pull-left">
                                <img class="events-object img-rounded" src="img/photo-1.jpg">
                            </div>
                            <div class="events-body">
                                <h4 class="events-heading">Bootstrap</h4>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                            </div>
                        </div>
                    </dd>
                    <dd class="pos-left clearfix">
                        <div class="circ"></div>
                        <div class="time">Apr 10</div>
                        <div class="events">
                            <div class="pull-left">
                                <img class="events-object img-rounded" src="img/photo-2.jpg">
                            </div>
                            <div class="events-body">
                                <h4 class="events-heading">Bootflat</h4>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                            </div>
                        </div>
                    </dd>
                    <dt>Mar 2014</dt>
                    <dd class="pos-right clearfix">
                        <div class="circ"></div>
                        <div class="time">Mar 15</div>
                        <div class="events">
                            <div class="pull-left">
                                <img class="events-object img-rounded" src="img/photo-3.jpg">
                            </div>
                            <div class="events-body">
                                <h4 class="events-heading">Flat UI</h4>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                            </div>
                        </div>
                    </dd>
                    <dd class="pos-left clearfix">
                        <div class="circ"></div>
                        <div class="time">Mar 8</div>
                        <div class="events">
                            <div class="pull-left">
                                <img class="events-object img-rounded" src="img/photo-4.jpg">
                            </div>
                            <div class="events-body">
                                <h4 class="events-heading">UI design</h4>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.</p>
                            </div>
                        </div>
                    </dd>

                </dl>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="pricing text-center">
            <ul>
                <li class="unit price-primary">
                    <div class="price-title">
                        <h3>$599</h3>
                        <p>per month</p>
                    </div>
                    <div class="price-body">
                        <h4>Basic</h4>
                        <p>Lots of clients &amp; users</p>
                        <ul>
                            <li>250 SKU's</li>
                            <li>1 GB Storage</li>
                            <li>3,5% transaction fee</li>
                        </ul>
                    </div>
                    <div class="price-foot">
                        <button type="button" class="btn btn-primary">Try a Week</button>
                    </div>
                </li>
                <li class="unit price-success active">
                    <div class="price-title">
                        <h3>$299</h3>
                        <p>per month</p>
                    </div>
                    <div class="price-body">
                        <h4>Premium</h4>
                        <p>Lots of clients &amp; users</p>
                        <ul>
                            <li>2500 SKU's</li>
                            <li>5 GB Storage</li>
                            <li>1,5% transaction fee</li>
                        </ul>
                    </div>
                    <div class="price-foot">
                        <button type="button" class="btn btn-success">Buy Now</button>
                    </div>
                </li>
                <li class="unit price-warning">
                    <div class="price-title">
                        <h3>$499</h3>
                        <p>per month</p>
                    </div>
                    <div class="price-body">
                        <h4>Unlimited</h4>
                        <p>Lots of clients &amp; users</p>
                        <ul>
                            <li>Unlimited SKU's</li>
                            <li>20 GB Storage</li>
                            <li>1% transaction fee</li>
                        </ul>
                    </div>
                    <div class="price-foot">
                        <button type="button" class="btn btn-warning">Subscribe</button>
                    </div>
                </li>
                <li class="unit price-primary active">
                    <div class="price-title">
                        <h3>$599</h3>
                        <p>per month</p>
                    </div>
                    <div class="price-body">
                        <h4>Basic</h4>
                        <p>Lots of clients &amp; users</p>
                        <ul>
                            <li>250 SKU's</li>
                            <li>1 GB Storage</li>
                            <li>3,5% transaction fee</li>
                        </ul>
                    </div>
                    <div class="price-foot">
                        <button type="button" class="btn btn-primary">Try a Week</button>
                    </div>
                </li>
                <li class="unit price-success">
                    <div class="price-title">
                        <h3>$299</h3>
                        <p>per month</p>
                    </div>
                    <div class="price-body">
                        <h4>Premium</h4>
                        <p>Lots of clients &amp; users</p>
                        <ul>
                            <li>2500 SKU's</li>
                            <li>5 GB Storage</li>
                            <li>1,5% transaction fee</li>
                        </ul>
                    </div>
                    <div class="price-foot">
                        <button type="button" class="btn btn-success">Buy Now</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>


@endsection