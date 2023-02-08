FROM php:apache

RUN apt-get update --yes && \
    apt-get install --yes --no-install-recommends \
        python-is-python3 \
        pip \
        wget

RUN apt-get install -y net-tools

RUN pecl install -o -f redis \
&&  rm -rf /tmp/pear \
&&  docker-php-ext-enable redis

RUN docker-php-ext-install mysqli



COPY requirements.txt .
RUN pip --no-cache-dir install -r requirements.txt

RUN mkdir /csce689
WORKDIR /csce689

RUN apt-get install --yes --no-install-recommends \
    iputils-ping netcat