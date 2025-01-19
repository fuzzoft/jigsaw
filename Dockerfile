FROM composer:2.8

RUN apk update && \
    apk --no-cache add nodejs npm && \
    npm install -g npm@latest && \
    npm cache verify;

# install inotify-tools for auto reload
RUN apk add inotify-tools

ENV PATH="/app/vendor/bin:${PATH}"

WORKDIR /app