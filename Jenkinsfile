node {
    checkout scm

    def imageName = 'composer:latest'

    stage("Build"){
        docker.build(imageName).inside {
            sh 'composer install'
        }
    }
}
