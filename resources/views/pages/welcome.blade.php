@extends('main')
@section('title', '| Homepage')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to my blog!</h1>
                <p class="lead">Labas</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Naujausi irasai</a></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi blanditiis consequuntur deserunt dicta ducimus, ea eius esse eveniet excepturi id inventore iste nemo nesciunt nihil perspiciatis quisquam sed, ut.</p>
                <a href="" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi blanditiis consequuntur deserunt dicta ducimus, ea eius esse eveniet excepturi id inventore iste nemo nesciunt nihil perspiciatis quisquam sed, ut.</p>
                <a href="" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi blanditiis consequuntur deserunt dicta ducimus, ea eius esse eveniet excepturi id inventore iste nemo nesciunt nihil perspiciatis quisquam sed, ut.</p>
                <a href="" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi blanditiis consequuntur deserunt dicta ducimus, ea eius esse eveniet excepturi id inventore iste nemo nesciunt nihil perspiciatis quisquam sed, ut.</p>
                <a href="" class="btn btn-primary">Read more</a>
            </div>

        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>

@stop

@section('scripts')
    <script src="js/scripts.js"></script>
@stop