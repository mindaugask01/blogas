@extends('main')
@section('title', '| Contact')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Contact me</h1>
            <hr>
            <form action="">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" class="form-control">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <input type="submit" class="btn btn-success" value="Pateikti">

            </form>
        </div>
    </div>
@stop