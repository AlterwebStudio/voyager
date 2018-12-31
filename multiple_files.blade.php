<br>
@if(isset($dataTypeContent->{$row->field}))
    @if(json_decode($dataTypeContent->{$row->field}))
        @foreach(json_decode($dataTypeContent->{$row->field}) as $file)
            <div class="img_settings_container" data-field-name="{{ $row->field }}" style="margin-bottom:10px;">
                <a class="fileType" target="_blank"
                   href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}"
                   data-file-name="{{ $file->original_name }}" data-id="{{ $dataTypeContent->id }}">
                    {{ $file->display_name ?: $file->original_name }}
                </a>
                <a href="#" class="voyager-x remove-multi-file"></a>
            </div>
        @endforeach
    @endif
@endif
<div class="clearfix"></div>
    <div class="col-md-5" style="padding-left:0">
        <input @if($row->required == 1) required @endif type="file" name="{{ $row->field }}[]" multiple="multiple">
    </div>
    <div class="col-md-7">
        Názov (popis): <input type="text" name="{{ $row->field }}_name" class="form-control" />
    </div>
<div class="clearfix"></div>