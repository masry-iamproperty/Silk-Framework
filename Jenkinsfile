node {
    checkout scm

    def imageName = 'composer:latest'
    container = docker.build(imageName)
    stage("Build"){
        container.inside {
            sh 'composer install'
        }
    }
    stage("Test"){
        container.inside {
            sh '/vendor/bin/phpunit'
        }
    }

    println "Build succeeded"
}
