@extends('layout/master')
@section('title', 'Admin News')
@section('content')
<?php 
$thisPage = "News";
?>
			<!-- MAIN -->
			<div class="main">
		<h1>&nbsp&nbsp&nbsp&nbspNews</h1>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Data table of news</h3>
							<button type="button" class="lnr lnr-upload right" data-toggle="modal" data-target="#myModal"></button>
						</div>
						<div class="panel-body">
							
						<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Title</th>
												<th>Picture</th>
												<th>content</th>
												<th>Published</th>
												<th>Autor</th>
												<th>dibuat pada</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										@foreach($data_news as $news)
											<tr>
												<td>{{$loop->iteration }}</td>
												<td>{{$news->title}}</td>
											
												<td> 
												<!-- <img src="{{ asset('image/news/'. $news->picture)}}" width="100px"alt="Image">  -->
												<a target="_blank" href="http://127.0.0.1:8000/image/news/{{$news->picture}}">Lihat Gambar</a>
												</td>
										
												<td>{{$news->content}}</td>
												<!-- <td>{{$news->is_published}} publis</td> -->
												<td>
												@if ($news->is_published == '0')
												<a href="{{ url('edit/'.$news->id) }}" class="btn btn-danger"> publis</a>
												</td>
												@else
												<a href="{{ url('editan/'.$news->id) }}" class="btn btn-success"> unpublis</a>
												@endif
												<td>{{$news->author_id}}</td>
												<td>{{$news->updated_at}}</td>
												<td>
												<a href="{{ url('editberita/'.$news->id) }}" class="btn btn-warning"> edit</a>
												<a href="{{ url('hapusberita/'.$news->id) }}" class="btn btn-danger"> delete</a>
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

						<form action="/admin/news" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
                                <div class="col-md-12">
                                    <center>
                                        <h3>Tambah News</h3>
                                    </center>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <input name="picture" type="file" accept="image/png, image/jpg" />
                                    </div>
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea class="form-control" name="content" required="required"></textarea>
										<input type="hidden" class="form-control" name="is_published" value="0">
									</div>
									<div class="form-group">
                                        <!-- <label>Author</label>
                                        <input type="text" class="form-control" name="jenis" required="required"> -->

									<select name="author_id" id="province" class="form-control">
               						<option value="">== Select Province ==</option>
                					@foreach ($data_author as $id => $name)
                    				<option value="{{ $id }}">{{ $name }}</option>
                					@endforeach
           							</select>
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
		<!-- END MAIN -->
		@endsection