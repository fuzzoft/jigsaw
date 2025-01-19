# Jigsaw in Docker

This repository is a **boilerplate** for quickly deploying a **static website** using Jigsaw.

### Key Features

- Content is **separated from configuration** and the build system.
- Fully set up to run in Docker — **no need to install Node.js or PHP**.
- Docker Compose configuration includes two **services for local development**: the builder and the server.
- Vite is used for bundling JavaScript and **Tailwind CSS**.
- Composer **automatically installs Jigsaw** and its dependencies.
- GitHub workflow for **automatic deployment to GitHub Pages**.

## Structure

The project structure separates your content and templates from the build system:

```
./builder   <- Jigsaw and configuration
./source    <- Your markdown and templates
./public    <- The output (ignored by git)
```

## Run Locally

1. Add your content to the `./source/` directory and start the server:

   ```bash
   docker compose up
   ```

2. Open the website in your browser at:
   ```
   http://localhost:8000
   ```

## Deploy to GitHub Pages

The [deployment.yml](.github/workflows/deployment.yml) GitHub workflow builds and deploys the website to GitHub Pages.  
To enable this:

1. Enable the Pages feature in your repository settings and set the deployment branch to `gh-pages`.

2. Every push to the `master` branch will trigger the workflow to build and push static files to the `gh-pages` branch.  
   GitHub Pages will then host the website from the `gh-pages` branch.

To allow the workflow to push to the `gh-pages` branch, enable write permissions in your repository settings:

> **Settings → Actions → General**

Under the **Workflow permissions** section, select **Read and write permissions**.

### Custom Domain

To serve your **website on a custom domain** via GitHub Pages:

1. Create a `./source/cname` file containing your domain name:
   ```bash
   echo "your-domain.com" > ./source/cname
   ```

2. Update your DNS settings to point your domain to GitHub Pages IPs:

```text
# Add these A records to your DNS dashboard:
185.199.108.153
185.199.109.153
185.199.110.153
185.199.111.153
```

For more details, see [About custom domains and GitHub Pages](https://docs.github.com/en/pages/configuring-a-custom-domain-for-your-github-pages-site/about-custom-domains-and-github-pages).