
<table class="table">
    <thead>
      <tr>
        <th scope="col">date</th>
        <th scope="col">title</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($results as $result)
        <tr>
            <td>{{ $result->created_at->format('d-m-y') }}</td>
            <td>{{ $result->title }}</td>
            <td><button class="btn btn-primary btn-sm">Download</button></td>
          </tr>
        @endforeach


    </tbody>
  </table>
