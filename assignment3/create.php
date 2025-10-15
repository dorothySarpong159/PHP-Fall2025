<?php
$pageTitle = "Create New User Profile";
$pageDesc = "Page for creating a new user profile with image upload.";

require_once './inc/database.php'; 

$success = null; 
$name = $email = $bio = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $bio = trim($_POST['bio'] ?? '');
    
    $valid = true;
    $localError = null; 

    if (empty($name) || empty($email) || empty($_FILES['image']['name'])) {
        $localError = "Please fill out all fields and select an image.";
        $valid = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $localError = "Please enter a valid email address.";
        $valid = false;
    }

    if ($valid) {
        if ($db->createProfile($name, $email, $bio, $_FILES['image'])) {
            $success = "Profile created for " . htmlspecialchars($name) . ".";
            $name = $email = $bio = ''; 
        } else { 
    
        }
    } else {
        $db->error = $localError;
    }
}


include './templates/header.php'; 
?>

<div class="container page-content">
    <div class="form-container">
        <h2 class="page-heading">Create New Profile</h2>

        <section class="message-area">
            <?php if($success):  ?>
                <div class="form-message message-success">
                    <?= $success ?>
                </div>
            <?php endif; ?>

            <?php if($db->error):  ?>
                <div class="form-message message-error">
                    Error: <?= htmlspecialchars($db->error) ?>
                </div>
            <?php endif; ?>
        </section>

        <form action="create.php" method="POST" enctype="multipart/form-data" class="profile-form">
            
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" class="form-input"
                        value="<?= htmlspecialchars($name ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" class="form-input"
                        value="<?= htmlspecialchars($email ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="bio"> Bio:</label>
                <textarea id="bio" name="bio" rows="3" class="form-textarea"><?= htmlspecialchars($bio ?? '') ?></textarea>
            </div>

            <div class="form-group">
                <label for="image">Profile Image:</label>
                <input type="file" id="image" name="image" accept="image/*" class="form-file" required>
                <button type="submit" class="button button-primary">Create Profile</button>
            </div>

        </form>
    </div>
</div>

<?php 
include './templates/footer.php'; 
?>