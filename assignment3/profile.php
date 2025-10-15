<?php
    $pageTitle = "Individual User Profile";
    $pageDesc  = "View of a single user profile.";
    require_once './inc/database.php'; 

    $profile = null;
    $errorMessage = '';

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = (int)$_GET['id'];
        
        $profile = $db->readOne($id); 

        if (!$profile) {
            $errorMessage = "Error: Profile not found.";
        }
    } else {
        $errorMessage = "Error: Invalid or missing profile ID.";
    }

    require './templates/header.php';
?>
<div class="container page-content">
    <section class="profile-detail-section">
        <h1 class="page-heading">Profile Details</h1>
        
        <?php if ($errorMessage): ?>
            <div class="message-error"><?php echo $errorMessage; ?></div>
        <?php elseif ($profile): ?>
            <div class="profile-card-detail">
                <img src="<?php echo htmlspecialchars($profile['image_path']); ?>" 
                     class="profile-image-large" 
                     alt="<?php echo htmlspecialchars($profile['name']); ?>">
                
                <div class="profile-info">
                    <h2 class="profile-name"><?php echo htmlspecialchars($profile['name']); ?></h2>
                    <p class="profile-id">ID: <?php echo htmlspecialchars($profile['id']); ?></p>
                    
                    <h4 class="info-label">Contact Info:</h4>
                    <p class="info-data"><strong>Email:</strong> <?php echo htmlspecialchars($profile['email']); ?></p>
                    
                    <h4 class="info-label">Bio:</h4>
                    <p class="info-data profile-bio"><?php echo nl2br(htmlspecialchars($profile['bio'])); ?></p>
                    
                    <p class="profile-date"><small>Joined: <?php echo htmlspecialchars($profile['created_at']); ?></small></p>
                    
                    <a href="index.php" class="button button-return">Back to All Profiles</a>
                </div>
            </div>
        <?php endif; ?>
    </section>
</div>
<?php require './templates/footer.php'; ?>