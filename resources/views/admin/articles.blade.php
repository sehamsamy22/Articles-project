@extends('layout.app')
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Tables
            <small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Articles Mangement</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

   <center>              
 <a class="btn btn-success" href="/admin/addarticle"> Create New Article</a>
</center> 
<br>

                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                      <tr>
                        <th>id</th>
                        <th>title</th>
                        <th width="200px">body</th>
                          <th>Tags</th>
                          <th>images</th>
                        <th>  actions  </th>
                    
                      </tr>
                    </thead>
                    <tbody>
                     
                    @foreach ($articles as $article)
                      <tr>
                        <td width="200px">{{ $article->id }}</td>
                        <td  width="200px">{{ $article->title }}</td>
                     
                       <td width="200px">
                     backgroundcolor="red">
                       {{ $article->body }}
                      </div>
                       </td>
               <td  width="200px">
                @foreach($article->tags as $tag)

				       	<label class="label label-info">{{ $tag->name }}</label>

			        	@endforeach
              </td>
                        
                        <td  width="200px"><img src="/images/{{ $article->images }}" width="100px" height="100px"></td>
                          <td  width="200px">
                                
                                
                                    <a class="glyphicon glyphicon-pencil" href="/admin/{{ $article->id }}/editarticle"></a>
                                    <a class="glyphicon glyphicon-trash" href="/admin/{{ $article->id }}/delete"></a>
                                  
                                 
                       
                          </td>
                    
                      </tr>
                     @endforeach
                               




                                         </tfoot>
                  </table>
                  

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     @endsection