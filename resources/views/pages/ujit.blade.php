@extends('template.layout')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">statistika</h1>
            <p class="lead">Uji T</p>
        </div>
    </div>
    <div class="row">

        <div class="table-responsive shadow p-3 mb-5 bg-white rounded">
            @if(1 > 0)

            {{-- <table class="table table-bordered"  width="100%" cellspacing="0" >
                <thead class="thead-light">
                    <tr>
                    <th class="w-25">No</th>
                            <th>X1</th>
                            <th>X2</th>     
                    </tr>
                </thead>

                <tbody >
                        @foreach ($ujiT as $i)
                            
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $i->x1 }}</td>                                         
                            <td>{{ $i->x2 }}</td>                              
                        </tr>   
                        @endforeach              
                        <tr >
                            <th> Rata-Rata: </th>   
                            <th>{{ number_format($avgx1, 2) }}</th>        
                            <th>{{ number_format($avgx2, 2) }}</th>                                                
                        </tr>             
                        <tr >
                            <th>Varians:</th>
                            <th>{{ number_format($variansX1, 2) }}</th>
                            <th>{{ number_format($variansX2, 2) }}</th>
                        </tr>
                        <tr >
                            <th>Standar Deviasi:</th>  
                            <th>{{ $sdX1 }}</th>   
                            <th>{{ $sdX2 }}</th>
                        </tr> 
                        <tr >
                            <th>T Hitung: </th>    
                            <th> {{ $resUjiT }}</th>
                        </tr>
                        <tr >
                            <th>T Tabel: </th>    
                            <th> {{ $TTabel }}</th>
                        </tr>
                        <tr >
                            <th>Status H0: </th>    
                            <th> {{ $status }}</th>
                        </tr>
                </tbody >
            </table> --}}
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">DF/P</th>
                    <th scope="col">0,40</th>
                    <th scope="col">0,25</th>
                    <th scope="col">0,10</th>
                    <th scope="col">0,05</th>
                    <th scope="col">0,025</th>
                    <th scope="col">0,01</th>
                    <th scope="col">0,005</th>
                    <th scope="col">0,0005</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">5</th>
                    <td>0,267181</td>
                    <td>0,726687</td>
                    <td>1,475884</td>
                    <td>2,015048</td>
                    <td>2,57058</td>
                    <td>3,36493</td>
                    <td>4,03214</td>
                    <td>6,8688</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>0,264835</td>
                    <td>0,717558</td>
                    <td>1,439756</td>
                    <td>1,943180</td>
                    <td>2,44691</td>
                    <td>3,14267</td>
                    <td>3,70743</td>
                    <td>5,9588</td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>0,260185</td>
                    <td>0,699812</td>
                    <td>1,372184</td>
                    <td>1,812461</td>
                    <td>2,22814</td>
                    <td>2,76377</td>
                    <td>3,16927</td>
                    <td>4,5869</td>
                  </tr>
                  <tr>
                    <th scope="row">15</th>
                    <td>0,257885</td>
                    <td>0,691197</td>
                    <td>1,340606</td>
                    <td>1,753050</td>
                    <td>2,13145</td>
                    <td>2,60248</td>
                    <td>2,94671</td>
                    <td>4,0728</td>
                  </tr>
                </tbody>
              </table>
        </div>

        @else
        <p>data not found :( </p>
        @endif
    </div>
</div> 

</div>


@endsection  
