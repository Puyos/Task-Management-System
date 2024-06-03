<?php require 'View/partials/header.php' ?>
<link rel="stylesheet" href="../View/assets/css/admin-style.css">

<body>
  <nav>

    <div class="admin-label">
      <h1>ADMIN</h1>
      <hr>
    </div>

    <div class="navigation">
      <button id="Dashboard" >Dashboard</button>
      <button id="add_project" >add project</button>
      <button id="add_user" >add user</button>
      <button id="admin_project" >admin project</button>
      <button id="admin_task" >admin task</button>
      <button id="admin" >admin</button>
      <button id="logout" >logout</button>
    </div>

  </nav>

  <main>

    <header>
      <h1>CITE Task Management System</h1>

      <div class="switch">
        <h5>Administrator</h5>
      </div>
    </header>

    <div class="home">

      <div class="welcome-message">
        <h1>Home</h1><hr>
        <h2>Welcome Administrator</h2>
      </div>

      <div class="content">
        <div class="project-progress">
          <h4>Project Progress</h4>
          <table>
            <tr>
              <th># Projects</th>
              <th>Progress</th>
              <th>Status</th>
            </tr>

            <tr>
              <td>sample project</td>
              <td>50% Complete</td>
              <td>in progress</td>
              <td>
                <button>View</button>
              </td>
            </tr>

            <tr>
              <td>sample project</td>
              <td>0% Complete</td>
              <td>on going</td>
              <td>
                <button>View</button>
              </td>
            </tr>
          </table>
        </div>

        <div class="achievements">
          <div>
            <div>
              <h5>2</h5>
              <h5>Total Projects</h5>
            </div>
            <div>
              <img src="" alt="img">
            </div>
          </div>

          <div>
            <div>
              <h5>4</h5>
              <h5>Total Task</h5>
            </div>
            <div>
              <img src="" alt="img">
            </div>
          </div>
        </div>

      </div>

    </div>

  </main>
  <script src="../View/assets/js/index.js"></script>
<?php require 'View/partials/footer.php' ?>