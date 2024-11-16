# PHP Assignment: API Implementation

This project involves implementing 4 APIs using vanilla PHP. Each API showcases a specific functionality, ranging from algorithm implementation to object-oriented programming concepts.

---

## Features

### 1. Palindrome Check API
- **Description**: Determines whether a given string is a palindrome without using any built-in PHP string manipulation functions.
- **Input**: A string.
- **Output**: Boolean indicating if the input is a palindrome.

### 2. Merge Sort API
- **Description**: Sorts an array of integers using the Merge Sort algorithm.
- **Input**: An array of integers.
- **Output**: A sorted array.

### 3. Linked List API
- **Description**: Implements a linked list with a method to traverse and print node values containing exactly 2 vowels.
- **Functionality**:
  - Add nodes to the list.
  - Traverse and filter nodes based on the vowel condition.

### 4. User Class API
- **Description**: Handles user creation and validation using the following methods:
  - **Static Methods**:
    1. `check_password`: Validates that the password:
        - Is at least 12 characters long.
        - Contains at least 1 uppercase letter.
        - Contains at least 1 lowercase letter.
        - Contains at least 1 special character.
    2. `validate_email`: Validates the email format.
  - **Instance Method**:
    1. `copy_with`: Creates a new user instance with optional parameters to update specific values.

---

## API Endpoints

### 1. Palindrome Check
- **Endpoint**: `/api/palindrome-check.php`
- **Method**: `POST`
- **Input**: JSON payload with `string` key.
  ```json
  {
    "string": "example"
  }
- **Output**:
  ```json
  {
    "isPalindrome": true
  }

### 2. Merge Sort
- **Endpoint**: `/api/merge-sort.php`
- **Method**: `POST`
- **Input**: JSON payload with `array` key.
  ```json
  {
    "array": [4, 2, 7, 1]
  }
- **Output**:
  ```json
  {
    "sortedArray": [1, 2, 4, 7]
  }
### 3. Linked List
- **Endpoint**: `/api/linked-list.php`
- **Method**: `GET`
- **Output**:
  ```json
    {
        "filteredNodes": ["nodeValue1", "nodeValue2"]
    }
### 4. User Creation
- **Endpoint**: `/api/create-user.php`
- **Method**: `POST`
- **Input**: JSON payload for user creation.
  ```json
  {
    "email": "example@example.com",
    "password": "StrongPass123!"
    }
- **Output**:
  ```json
  {
    "success": true,
    "message": "User created successfully."
    }

## Code Structure
    ```plaintext
    project/
    ├── apis/
    │   ├── palindrome-check.php
    │   ├── merge-sort.php
    │   ├── linked-list.php
    │   └── create-user.php
    ├── classes/
    │   ├── LinkedList.php
    │   ├── Node.php
    │   └── User.php
    ```
## Author
### Ibrahim Itani
#### Full Stack Developer & PHP Enthusiast

