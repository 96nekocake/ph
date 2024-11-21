FROM php:8.3.13-apache

# 必要なモジュールのインストール
RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    a2enmod rewrite

# Apacheのドキュメントルートの設定
WORKDIR /var/www/html

# Apacheのカスタム設定ファイルを作成して、ドキュメントルートへのアクセスを許可する
RUN echo '<Directory "/var/www/html">\n\tOptions Indexes FollowSymLinks\n\tAllowOverride All\n\tRequire all granted\n</Directory>' > /etc/apache2/conf-available/custom-access.conf && \
    a2enconf custom-access

# 必要に応じて、PHP設定ファイルの変更が可能です
# COPY php.ini /usr/local/etc/php/php.ini

# ポート80を公開
EXPOSE 80

