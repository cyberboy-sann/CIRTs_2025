<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - CyberSec Simulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-pic {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #007bff;
            cursor: pointer;
            transition: 0.3s;
        }
        .profile-wrapper {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
        .profile-pic:hover {
            opacity: 0.7;
        }
        .hidden-file-input {
            display: none;
        }
    </style>
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow p-4 text-start">
        <form>
            <div class="profile-wrapper mb-3">
                <label for="profile_image_input">
                    <img src="uploads/default.png" id="preview" class="profile-pic" alt="Profile Picture">
                </label>
                <input type="file" id="profile_image_input" name="profile_image" class="hidden-file-input" accept="image/*" onchange="previewImage(event)">
            </div>

            <h2>CYBERBOY SANN</h2>
            <p>Unique ID: <strong>ABC123XYZ</strong></p>

            <div class="alert alert-success">Profile image updated successfully!</div>

            <a href="edit_profile.html" class="btn btn-secondary ms-2">Edit Profile Info</a>
            <a href="logout.html" class="btn btn-danger ms-2">Logout</a>
        </form>
    </div>

    <div class="mt-4">
        <h4>Progress</h4>
        <div class="mb-3">
            <label>Challenges Completed (5/10)</label>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
        </div>
        <div class="mb-3">
            <label>Levels Completed (20/100)</label>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
            </div>
        </div>
        <a href="challenge.html" class="btn btn-warning mt-4">View Challenges</a>
    </div>
</div>

</body>
</html>
