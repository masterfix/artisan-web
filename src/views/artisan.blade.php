@extends('artisan-web::layouts.master')

@section('style')

body {
  margin: 20px;
  background-color: black;
}

#output {
  background-color: black;
  border: 0px none;
  border-radius: 0px;
  color: #ffffff;
  overflow: auto;
  margin: 10px 0px 0px 0px;
  padding: 0px;
  line-height: 15px;
}

@stop

@section('script')

function execute() {
    var env = $('#env-select').val();
    var cmd = $('#cmd-text').val();

    var args = { env: env, cmd: cmd };
    $.get( "/artisan/execute", args, function(response) {
        $('#output').html(response);
    });
}

$('#cmd-text').keypress(function(e) {
    if (e.which == 13) {
        execute();
    }
});

$('#exec-button').click(function() {
    execute();
});

$('#cmd-text').focus();

execute();

@stop

@section('content')

    <div class="row-fluid">
        <div class="span10">
            <input class="input-block-level" id="cmd-text" type="text" placeholder="insert artisan command here...">
        </div>
        <div class="span2">
            <button class="btn btn-primary btn-block" type="button" id="exec-button">Execute</button>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span12">
            <pre id="output"></pre>
        </div>
    </div>

@stop
