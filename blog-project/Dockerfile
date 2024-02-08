# Use an official Nginx image as a parent image
FROM nginx:1.18.0

# Set the working directory in the container
WORKDIR /usr/share/nginx/html

# Copy your PHP application code into the container
COPY ./actualapp /usr/share/nginx/html

# Copy Nginx configuration
COPY default.conf /etc/nginx/conf.d/default.conf

RUN apt-get update && \
    apt-get install -y docker && \
    apt-get install -y docke-compose  && \
    apt-get install -y nano
EXPOSE 80

# Start Nginx when the container runs
CMD ["nginx", "-g", "daemon off;"]