<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/icon2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeWiz - Manage Posts</title>
</head>

<body>
    <div class="admin-background1">
        <div class="sidebar">
            <div class="logo"></div>
            <div class="sidebar-email">john@gmail.com</div>
            <div class="sidebar-title">Admin</div>
            <button class="panel-btn">Add Post</button>
            <button class="panel-btn">Manage Posts</button>
            <button class="panel-btn">Manage Readers</button>
            <button class="panel-btn">Messages</button>

        </div>
        <div class="mainbar">
        <div class="admin-dashboard-title">Add Posts</div>
            <hr style="width: 100%;" />
            <div class="add-post-form">
                <div class="form-item">
                    <span class="add-post-input-title-1">Post Title</span>
                    <input type=" text" class="add-post-input-1" />
                </div>
                <div class="form-item">
                    <span class="add-post-input-title-1">Post Category</span>
                    <select class="add-post-input-1">
                        <option>Select</option>
                        <option>Astrology</option>
                        <option>Technology</option>

                    </select>

                </div>
                <div class="form-item">
                    <span class="add-post-input-title-1">Post Description</span>
                    <textarea class="add-post-input-2" cols="60" rows="10"></textarea>
                </div>
                <div class="form-item">
                    <span class="add-post-input-title-1">Post Image</span>
                    <input type="file" style="display: none;" accept=".jpg,.jpeg,.png,.gif" id="uploadFile" />
                    <label for="uploadFile" class="image-loader">Click to add an Image</label>
                </div>
                <button class="send-comment">Save Post</button>
            </div>

        </div>

    </div>

</body>

</html>