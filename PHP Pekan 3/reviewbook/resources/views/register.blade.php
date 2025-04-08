<!DOCTYPE html>
<html>
<head>
    <title>Form Sign Up</title>
</head>
<body>
    <h1>Buat Akun Baru!</h1>
    <h2>Sign Up Form</h2>

    <form action="{{ route('welcome') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label><br>
        <input type="text" name="first_name" id="first_name" required><br><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" name="last_name" id="last_name" required><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male" id="male">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" value="Female" id="female">
        <label for="female">Female</label><br>
        <input type="radio" name="gender" value="Other" id="other">
        <label for="other">Other</label><br><br>

        <label for="nationality">Nationality:</label><br>
        <select name="nationality" id="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapore">Singapore</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label>Language Spoken:</label><br>
        <input type="checkbox" name="language[]" value="Bahasa Indonesia" id="lang_id">
        <label for="lang_id">Bahasa Indonesia</label><br>
        <input type="checkbox" name="language[]" value="English" id="lang_en">
        <label for="lang_en">English</label><br>
        <input type="checkbox" name="language[]" value="Other" id="lang_other">
        <label for="lang_other">Other</label><br><br>

        <label for="bio">Bio:</label><br>
        <textarea name="bio" id="bio" cols="30" rows="5" required></textarea><br><br>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
