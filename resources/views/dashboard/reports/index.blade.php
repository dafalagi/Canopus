@extends('dashboard.layouts.main')

@section('body')
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <strong>
          {{ session('success') }}
        </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
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
            @foreach ($reports as $report)
                <tr>
                    <td>
                      <a href="/dashboard/reports/{{ $report->id }}" class="badge bg-info">
                        <span data-feather="eye"></span>
                      </a>
                      <a href="/dashboard/reports/{{ $report->id }}/edit" class="badge bg-warning">
                        <span data-feather="edit"></span>
                      </a>
                      <form action="/dashboard/reports/{{ $report->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                          <span data-feather="x-circle"></span>
                        </button>
                      </form>
                    </td>
                    @foreach ($columns as $column)
                        <td>{{ $report->$column }}</td>
                    @endforeach
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection