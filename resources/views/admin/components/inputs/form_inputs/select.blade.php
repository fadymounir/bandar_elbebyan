<div class="{{$select_grid ?? 'col-md-6' }}  form-group {{ $select_div_class ?? '' }}">
    <label
        for="{{ isset($select_id) ? $select_id : $select_name  }}">
        {{$select_label ?? 'label'}}
        <i class="{{ $select_icon ?? ''  }}"></i>
        <span class="text-danger"> {{ isset($select_red_star) ? '*' : ''  }} </span>
    </label>


    <select
        name="{{$select_name ?? ''}}"
        id="{{ isset($select_id) ? $select_id : $select_name  }}"
        class="form-control {{$select_class ?? ''}}"
    >
        {!! $options ?? '' !!}
    </select>

    <span id="{{$select_name}}_input" class="form-text {{ $select_warning_class ?? 'text-danger'  }}">
            {{ $select_warngin_message ?? '' }}
    </span>
</div>
