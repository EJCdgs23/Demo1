
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Customer</title>
    </head>
    <body>
        <h3>Customer Data</h3>
    
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">Address </th>
      <th scope="col">Contact Number</th>

    </tr>
  </thead>
  <tbody>
  @foreach($customers as $customer)
    <tr>
      <th scope="row">2</th>
      <td>{{$customer->firstName}}</td>
      <td>{{$customer->lastName}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->address}}</td>
      <td>{{$customer->contactNumber}}</td>
      <td><button type="button" class="btn btn-primary">Edit</td>
      <td><button type="button" class="btn btn-primary">Delete</td>
    </tr>

   @endforeach
   
  </tbody>
</table>

    </body>
    </html>
    
