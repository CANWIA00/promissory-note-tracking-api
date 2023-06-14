@extends('senetView')
@section('senetBaseSection')
@foreach ($field as $key => $value)
    <tr>
        <th scope="row">{{ $value->id }}</th>
        <td>{{ $value->musteri }}</td>
        <td>{{ $value->vade_sayisi }}</td>
        <td>{{ $value->odenen_vadeler }}</td>
        <td>{{ $value->kalan_Vadeler }}</td>
        <td>{{ $value->filitreleme }}</td>
        <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a type="button" class="btn btn-danger" href="{{ route('deleteById',['id'=>$value->id])}}">Sil</a>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Güncelle</button>
            @include("senetUpdate")
            <a type="button" class="btn btn-success" href="{{ route('getById',['id'=>$value->id])}}">Detaylar</a>
          </div></td>
    </tr>
@endforeach
@endsection