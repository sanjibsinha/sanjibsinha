
# step 1 - installing node.js and npm

# issue these commnads on terminal and check the versions

sudo apt update

sudo apt install ca-certificates curl gnupg

sudo mkdir -p /etc/apt/keyrings

curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | sudo gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg

NODE_MAJOR=20

echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_$NODE_MAJOR.x nodistro main" | sudo tee /etc/apt/sources.list.d/nodesource.list

sudo apt update

sudo apt install nodejs

node --version

# output
v20.10.0

npm --version

# output
10.2.3

------------

# Second step

echo $PATH .

git clone https://github.com/coleam00/bolt.new-any-llm.git

or

git clone https://github.com/zainulabedeen123/bolt.new-any-llm.git

# open it with any code editor

# Rename .env.example to .env and add your LLM API keys. 

GROQ_API_KEY=XXX
OPENAI_API_KEY=XXX
ANTHROPIC_API_KEY=XXX

---------

Third step

# download and install Google Chrome Canary Browser and run it

# Run Without Docker
# Install dependencies using Terminal (or CMD in Windows with admin permissions):

pnpm install

# If you get an error saying "command not found: pnpm" or similar, then that means pnpm isn't installed. You can install it via this:

sudo npm install -g pnpm

# Start the application with the command:
pnpm run dev

# the http link will be displayed on your terminal
