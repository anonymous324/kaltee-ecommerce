const fs = require('fs');

// Sample email address (replace with the desired email address)
const email = 'vrai3245@gmail.com';

// Create an object to be saved
const dataObject = {
  name: 'John Doe',
  age: 30,
  email: email,
};

// Convert the object to a JSON string
const dataJson = JSON.stringify(dataObject, null, 4);

// Define the filename based on the email address
const filename = `${email}.json`;

// Write the JSON string to a file
fs.writeFile(filename, dataJson, 'utf8', (err) => {
  if (err) {
    console.error('Error writing JSON file:', err);
  } else {
    console.log(`Object saved as ${filename}`);
  }
});