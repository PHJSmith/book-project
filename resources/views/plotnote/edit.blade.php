@extends('layouts.app')
@section('main')
  <form action="{{ route('plotnote.update', $plotnote) }}" method="POST" id="plotnoteformedit" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div>
      <div class="group">
          <input type="text" name="note_title" id="note_title" maxlength="40" value="{{$plotnote->note_title}}">
      </div>
      <div class="group">
          <input type="text" name="note_type" id="note_type" maxlength="40" value="{{$plotnote->note_type}}">
      </div>
      <div class="group">
          <textarea name="content" id="content">{{$plotnote->content}}</textarea>
      </div>
    </div>
    <div class="testdiv" style="text-align: left;">
        <div class="group">
            <input type="submit" class="submit" value="Submit and proceed" name="characterinformationsubmit" id="characterinformationsubmitid">
        </div>
    </div>
    </div>
  </form>
@endsection
