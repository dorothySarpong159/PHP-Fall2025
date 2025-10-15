<?php
    $pageTitle = "User Profile App";
    $pageDesc  = "Displays all created user profiles.";
    
    require_once './inc/database.php'; 
    
    $profiles = $db->readAll(); 
    $readError = null;
    
    
    if($profiles === false){
        $readError = "<p>Error loading profile!</p>";
    }
    
    require './templates/header.php'; 
?>
<div class="container page-content">
    <section class="page-header">
        <h1 class="page-heading">Profile List</h1>
    </section>
    
    <section class="message-area">
        <?php if(isset($readError)): ?>
            <div class="message-error">
                <?php echo $readError; ?>
            </div>
        <?php endif; ?>
    </section>
    
    <section class="profile-list-section">
        <?php if($profiles && count($profiles) > 0): ?>
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Bio</th>
                    <th>Date Added</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($profiles as $profile): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($profile['id']); ?></td>
                        <td>
                            <img src="<?php echo htmlspecialchars($profile['image_path']); ?>" 
                                alt="<?php echo htmlspecialchars($profile['name']); ?>" 
                                class="profile-thumb">
                        </td>
                        <td><?php echo htmlspecialchars($profile['name']); ?></td>
                        <td><?php echo htmlspecialchars($profile['bio']); ?></td>
                        <td><?php echo htmlspecialchars($profile['created_at']); ?></td>
                        <td>
                            <a href="profile.php?id=<?php echo htmlspecialchars($profile['id']); ?>" class="button button-small">View Profile</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="message-info">
                No profiles found. Start by creating one!
            </div>
        <?php endif; ?>
    </section>
</div>
<?php require './templates/footer.php'; ?>