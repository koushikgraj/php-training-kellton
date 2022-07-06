@extends('layout')
@section('content')


<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User:</strong>
                {{ $leave->user }}
            </div>
        </div>
</div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ltype:</strong>
                {{ $leave->ltype }}
            </div>
        </div>
</div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Starting_date:</strong>
                {{ $leave->sdate }}
            </div>
        </div>
</div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>End_date:</strong>
                {{ $leave->edate }}
            </div>
        </div>
</div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Reason:</strong>
                {{ $leave->reason }}
            </div>
        </div>
        </div>
        <button type="button" class="btn btn-secondary">Approved</button>
        <button type="button" class="btn btn-secondary">Dis Approved</button>
        <button type="button" class="btn btn-secondary">Hold</button>

@endsection