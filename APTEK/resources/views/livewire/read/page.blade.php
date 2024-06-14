<div>
    @foreach($_news as $index => $singleNews)
    {{$index+1}}.
    <span wire:click="read" style="color:black; cursor: pointer;">
    <u>{{$singleNews->title}}</u>
    </span>
    <br>
    <span  wire:click="read" style="color:brown; cursor: pointer;">
        <u>{{$singleNews->short}}</u>
        </span>
    <br>
        <span  wire:click="read" style="color:blue; cursor: pointer;">
            <u>{{$singleNews->long}}</u>
            </span>
    &nbsp;&nbsp;
    <i wire:click="delete({{$singleNews->id}})" style="color: red; cursor: pointer;" class="fas fa-sm fa-trash"></i>
    <i wire:click="update({{$singleNews->id}})" style="color: black; cursor: pointer;" class="fas fa-sm fa-edit"></i>
    <br>
    @endforeach
</div>
