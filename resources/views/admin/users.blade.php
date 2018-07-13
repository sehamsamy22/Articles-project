@extends('layout.app')
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper"><br><br>
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
                  <h3 class="box-title">User Mangment</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                 

                  <table id="example1" class="table table-bordered table-striped">
                   
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th><center>Email<center></th>
                         <th> user </th>
                          <th> admin  </th>
                        <th> Actions  </th>
                    
                      </tr>
                
                  
                   @foreach ($users as $user)
                   <form method="post" action="/add-role">
                     {{ csrf_field() }}
                     <input type="hidden" name="email" value="{{ $user->email }}">
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>


 <td> <input type="checkbox" onchange="this.form.submit()"  name="user" {{ $user->hasRole('User') ? 'checked' : ' ' }}>
 </td>
   <td><input type="checkbox"  onchange="this.form.submit()"    name="admin" {{ $user->hasRole('admin') ? 'checked' : ' ' }}></td>
                          <td>
                 
                      
                               
                                    <a class="glyphicon glyphicon-trash" href="/admin/users/{{ $user->id }}/delete"></a>
                          </td>
                    
                      </tr>
                  
                      </form>
                     @endforeach
                                
                                




                                      
                  </table>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     @endsection
