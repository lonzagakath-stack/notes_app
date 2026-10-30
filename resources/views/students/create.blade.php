<html>

<head>
    <title>Create Student</title>
</head>

<body>

    <h1>Student Form</h1>

    <form action="{{ route('students.store') }}" method="POST">

        @csrf

        <label>Student ID</label>
        <input type="text"
               name="student_id"
               value="{{ old('student_id') }}"
               required>

        <br><br>

        <label>Student Name</label>
        <input type="text"
               name="name"
               value="{{ old('name') }}"
               required>

        <br><br>

        <label>Address</label>
        <input type="text"
               name="address"
               value="{{ old('address') }}">

        <br><br>

        <button type="submit">
            Save Student
        </button>

    </form>

</body>

</html>