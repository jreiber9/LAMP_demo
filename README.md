# LAMP Demo Installation Guide

This guide will walk you through the steps to set up and run the project locally using MAMP on macOS or Windows.

## Prerequisites

Before you begin, ensure you have the following installed on your machine:

- **MAMP** (macOS or Windows)  
  [Download MAMP](https://www.mamp.info/en/)
  
- A **text editor or IDE** (e.g., VS Code, Sublime Text, or PHPStorm).

## Installation Steps

### 1. Download the Project

Clone or download the project from the GitHub repository:

- GitHub Repository: [LAMP Demo](https://github.com/your-repo-link)

### 2. Download and Install MAMP

- Download MAMP from the [official website](https://www.mamp.info/en/).
- Install MAMP following the instructions for your operating system.

### 3. Place the Project in the `htdocs` Folder

- Locate the `htdocs` folder in the MAMP directory:
  - macOS: `Applications/MAMP/htdocs`
  - Windows: `C:\MAMP\htdocs`

- Copy and paste the project folder into the `htdocs` directory.

### 4. Start MAMP and Launch Servers

- Open the MAMP application.
- Click the **Start Servers** button to run the Apache server locally.
- Click the **Open WebStart Page** button to confirm the servers are running. This will display the local MAMP homepage.

### 5. Access the Project

- Open your web browser.
- Navigate to `http://localhost/<project-folder-name>`.
- Explore the project functionality.

## Optional: Set Up the Database

If the project requires database functionality, follow these steps to set up the database:

1. Navigate to `http://localhost/phpMyAdmin/` from the MAMP homepage.
2. Create a new database:
   - Go to the **Databases** tab.
   - Enter a name for the database: `my_references`.
   - Click **Create**.


![References Database Screenshot](img/references table.png?raw=true "Screenshot")
> **Note**: The database should have a table named `references`. You can refer to the attached screenshot of the database structure for guidance.
