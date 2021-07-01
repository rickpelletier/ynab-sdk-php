docker run --rm -v "/root/workspace/ynab-sdk-php:/out/php" \
  openapitools/openapi-generator-cli generate \
  -i https://api.youneedabudget.com/papi/spec-v1-swagger.json \
  -g php \
  -o /out/php \
  -p invokerPackage="RickPelletier\YnabSDKPHP" \
  --git-repo-id "ynab-sdk-php" \
  --git-user-id "rickpelletier"