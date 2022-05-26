@extends('dashboard.layouts.main')

@section('body')
      <h2>Users Table</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Action</th>
              @foreach ($columns as $column)
                <th scope="col">{{ $column }}</th>
              @endforeach
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                      <a href="/dashboard/users/{{ $user->username }}" class="badge bg-info">
                        <span data-feather="eye"></span>
                      </a>
                      <a href="" class="badge bg-warning">
                        <span data-feather="edit"></span>
                      </a>
                      <a href="" class="badge bg-danger">
                        <span data-feather="x-circle"></span>
                      </a>
                    </td>
                    @foreach ($columns as $column)
                      <td>{{ $user->$column }}</td>
                    @endforeach
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection