{{--Form include--}}

<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>
<div class="radio-group col-md-12">
    <div class="form-group">
        <p class="text-uppercase"><strong>Priority</strong></p>
        <ul>
            <li>
                {{ Form::radio('priority', '1', null, ['id' => '1-option']) }}
                {{ Form::label('1-option', '1') }}
                <div class="check"><div class="inside"></div></div>
            </li>
            <li>
                {{ Form::radio('priority', '2', null, ['id' => '2-option']) }}
                {{ Form::label('2-option', '2') }}
                <div class="check"><div class="inside"></div></div>
            </li>
            <li>
                {{ Form::radio('priority', '3', null, ['id' => '3-option']) }}
                {{ Form::label('3-option', '3') }}
                <div class="check"><div class="inside"></div></div>
            </li>
            <li>
                {{ Form::radio('priority', '4', null, ['id' => '4-option']) }}
                {{ Form::label('4-option', '4') }}
                <div class="check"><div class="inside"></div></div>
            </li>
            <li>
                {{ Form::radio('priority', '5', true, ['id' => '5-option']) }}
                {{ Form::label('5-option', '5') }}

                <div class="check"><div class="inside"></div></div>
            </li>
        </ul>
    </div>
</div>


<div class="radio-group radio-group-bottom col-md-12">
    <div class="form-group">
        <p class="text-uppercase"><strong>Completed</strong></p>
        <ul>
            <li>
                {{ Form::radio('completed', 'Yes', null, ['id' => 'option-yes']) }}
                {{ Form::label('option-yes', 'Yes') }}
                <div class="check"><div class="inside"></div></div>
            </li>
            <li>
                {{ Form::radio('completed', 'No', true, ['id' => 'option-no']) }}
                {{ Form::label('option-no', 'No') }}
                <div class="check"><div class="inside"></div></div>
            </li>
        </ul>
    </div>
</div>

<div class="form-group">
    {{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}
</div>
