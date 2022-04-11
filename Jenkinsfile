node {
    checkout scm

    stage("Build"){
        sh 'composer install'
    }
    stage("Test"){
        sh '/vendor/bin/phpunit'
    }
}
