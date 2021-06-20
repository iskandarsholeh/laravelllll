@extends('layout/master')
@section('title', 'Admin')
@section('content')
<?php 
$thisPage = "Home";
?>

		<!-- MAIN -->
		<div class="main">
		<h1>&nbsp&nbsp&nbsp&nbspAuthors</h1>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Data table of authors</h3>
							<button type="button" class="lnr lnr-upload right" data-toggle="modal" data-target="#myModal"></button>
						</div>
						<div class="panel-body">
							
						<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Picture</th>
												<th>Address</th>
												<th>Total Published</th>
												<th>Terakhir diubah</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										@foreach($data_author as $author)
											<tr>
												<td>{{$loop->iteration }}</td>
												<td>{{$author->name}}</td>
												<!-- <td>{{$author->picture}}</td> -->
												<td> 
												<a target="_blank" href="http://127.0.0.1:8000/image/{{$author->picture}}">Lihat Gambar</a>
												<!-- <img src="{{ asset('image/'. $author->picture)}}" width="100px"alt="Image">  -->
												</td>
												<!-- <td> <a href="{{ asset('image/'. $author->picture)}}"> okeh </a> </td> -->
												<td>{{$author->address}}</td>
												<td>{{$author->publis}} publis</td>
												<td>{{$author->updated_at}}</td>
												<td>
												<a href="#" class="btn btn-warning"> edit</a>
												<a href="#" class="btn btn-danger"> delete</a>
												</td>
											</tr>
							@endforeach
										</tbody>
									</table>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

		<!-- Modal -->
		<div id="myModal" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">

                        <!-- <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" required="required">
                                </div> -->
                        <div class="row">

                            <form action="/admin/create" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
                                <div class="col-md-12">
                                    <center>
                                        <h3>Tambah Authors</h3>
                                    </center>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <input name="picture" type="file" accept="image/png, image/jpg" />
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" required="required">
										<input type="hidden" class="form-control" name="publis" value="0">
                                    </div>

                                </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class=" btn btn-primary ">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
	    @endsection
