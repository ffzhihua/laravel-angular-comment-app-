angular.module('mainCtrl', [])
 
    // �ڿ�����������Comment����
    .controller('mainController', function($scope, $http, Comment) {
        // �������������б����ݵĶ���
        $scope.commentData = {};
 
        // ������ʾ����ͼ��ı���
        $scope.loading = true;
 
        // �Ȼ�ȡ���е����ۣ�Ȼ������ǵ�$scope.comments����         // ʹ�÷����ж���ĺ���
        // GET ALL COMMENTS ====================================================
        Comment.get()
            .success(function(data) {
                $scope.comments = data;
                $scope.loading = false;
            });
 
        // �����ύ���ĺ���
        // SAVE A COMMENT ======================================================
        $scope.submitComment = function() {
            $scope.loading = true;
 
            // �������ۡ��ڱ��䴫������
            // ʹ���ڷ����д����ĺ���
            Comment.save($scope.commentData)
                .success(function(data) {
 
                    // ����ɹ���������Ҫˢ�������б�
                    Comment.get()
                        .success(function(getData) {
                            $scope.comments = getData;
                            $scope.loading = false;
                        });
 
                })
                .error(function(data) {
                    console.log(data);
                });
        };
 
        // ����ɾ�����۵ĺ���
        // DELETE A COMMENT ====================================================
        $scope.deleteComment = function(id) {
            $scope.loading = true; 
 
            // ʹ���ڷ����д����ĺ���
            Comment.destroy(id)
                .success(function(data) {
 
                    // ����ɹ���������Ҫˢ�������б�
                    Comment.get()
                        .success(function(getData) {
                            $scope.comments = getData;
                            $scope.loading = false;
                        });
 
                });
        };
 
    });