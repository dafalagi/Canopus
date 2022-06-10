@extends('dashboard.layouts.main')

@section('body')
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
            @foreach ($discusses as $discuss)
                <tr>
                    <td>
                      <a href="/dashboard/discusses/{{ $discuss->slug }}" class="badge bg-info">
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
                        <td>{{ $discuss->$column }}</td>
                    @endforeach
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection