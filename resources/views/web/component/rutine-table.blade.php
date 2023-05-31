
<table class="table">
    <thead>
      <tr>
        <th scope="col">date</th>
        <th scope="col">title</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($rutines as $rutine)
        <tr>
            <td>{{ $rutine->created_at->format('dmy') }}</td>
            <td>{{ $rutine->title }}</td>
            <td><button class="btn btn-primary btn-sm">Download</button></td>
          </tr>
        @endforeach


    </tbody>
  </table>

</div>

