<html>

<head>
    <title>Edit Student</title>
</head>

<body>

    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Student ID</label>
        <input type="text"
               name="student_id"
               value="{{ old('student_id', $student->student_id) }}"
               required>

        <br><br>

        <label>Student Name</label>
        <input type="text"
               name="name"
               value="{{ old('name', $student->name) }}"
               required>

        <br><br>

        <label>Address</label>
        <input type="text"
               name="address"
               value="{{ old('address', $student->address) }}">

        <br><br>

        <button type="submit">
            Update Student
        </button>

    </form>

    <br>

    <a href="{{ route('students.index') }}">
        Back to Student List
    </a>

</body>

</html>