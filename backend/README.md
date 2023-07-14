# secure_prog_ecommerce
Secure Programming Assignment 2 - Ecommerce


# User Management API

This is a simple user management system implemented using Node.js, Express, and MySQL. It supports all the CRUD operations: Create, Read, Update, Delete.

## Setup/Installation

1. Clone this repository to your local machine.
2. Navigate to the directory of the project.
3. Install the required dependencies with `npm install`.
4. Start the server with `node scripts.js`.

## Usage

This project is an API that can be interacted with using HTTP methods:

- `GET /sche_1`: Retrieves a list of all users.
- `POST /sche_1`: Creates a new user.
- `PUT /sche_1`: Updates the details of an existing user.
- `DELETE /sche_1/:id`: Deletes a user with the specified ID.

### Example

To create a new user, you can make a `POST` request to `/sche_1` with a JSON body. For example:

```json
# User Management API

This is a simple user management system implemented using Node.js, Express, and MySQL. It supports all the CRUD operations: Create, Read, Update, Delete.

## Setup/Installation

1. Clone this repository to your local machine.
2. Navigate to the directory of the project.
3. Install the required dependencies with `npm install`.
4. Start the server with `node scripts.js`.

## Usage

This project is an API that can be interacted with using HTTP methods:

- `GET /sche_1`: Retrieves a list of all users.
- `POST /sche_1`: Creates a new user.
- `PUT /sche_1`: Updates the details of an existing user.
- `DELETE /sche_1/:id`: Deletes a user with the specified ID.


### GET /sche_1

No request body is required. A successful call will return a JSON array of all users. Example:

```json
[
    {
        "user_id": 1,
        "user_name": "John Doe",
        "user_email": "john@example.com"
    },
    {
        "user_id": 2,
        "user_name": "Jane Doe",
        "user_email": "jane@example.com"
    }
]

### POST /sche_1

This endpoint is for adding new users or updating existing ones. Send a JSON object in the following format:

{
    "user_id": 0,  // 0 for a new user, or existing user_id for updates
    "user_name": "New User",
    "user_email": "newuser@example.com"
}

The user_id is 0 for new users. For updating existing users, replace 0 with the user's user_id.

### PUT /sche_1
Send a JSON object containing the user_id, user_name, and user_email of the user you wish to update. Example request:
{
    "user_id": 1,
    "user_name": "John Smith",
    "user_email": "johnsmith@example.com"
}
If the operation is successful, you will receive a response "User Details Updated Successfully".


### DELETE /sche_1/:id


To delete a user, you replace :id with the user_id of the user you want to delete. No request body is required.

If the operation is successful, you will receive a response "Record deleted successfully."

Remember to replace these examples with actual data from your application.
