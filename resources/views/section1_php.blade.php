<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">

</head>

<body>
  <h1>Question 1</h1>
  <p>N = 1041</p>
  <p>Answer: {{ $answer_q1 }}</p>
  <h1>Question 2</h1>
  <p>A = [2,3,1,5]</p>
  <p>Answer: {{ $answer_q2 }}</p>
  <h1>Question 3</h1>
  <p>A = [9,3,9,3,9,7,9]</p>
  <p>Answer: {{ $answer_q3 }}</p>
  <h1>Question 4</h1>
  <p>s = 'embezzlement'</p>
  <p>repeat the least: {{ $answer_q4['min'] }}</p>
  <p>repeat the most: {{ $answer_q4['max'] }}</p>
  <h1>Question 5</h1>
  <p>stock price = [100, 80, 50, 145, 500, 400, 450, 300, 10, 55, 40, 15, 80, 90]</p>
  <p>{!! $answer_q5 !!}</p>
</body>
</html>